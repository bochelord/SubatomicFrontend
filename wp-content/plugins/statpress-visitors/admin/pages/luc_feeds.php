<?php
function luc_feeds()
{	
	global $wpdb, $StatPressV_Option;
	$table_name = STATPRESS_V_TABLE_NAME;
	$action = "feeds";
	$rss_pageviews_color = "#f38f36";
	$spider_color = "#83b4d8";
	$graphdays = $StatPressV_Option['StatPressV_Graph_Days'];
	if ($graphdays == 0)
		$graphdays = 7;

	// $pa = pa and $pp = pp in the slug
	$pa = luc_page_posts();
	$pp = luc_page_periode();
	$today = gmdate('Ymd', current_time('timestamp'));
	$limitdate = gmdate('Ymd', current_time('timestamp') - 86400 * $graphdays * $pp +86400);
	$currentdate = gmdate('Ymd', current_time('timestamp') - 86400 * $graphdays * ($pp -1));

	$permalink = luc_permalink();
	$NP = luc_count_periode("date", "FROM $table_name as t", "JOIN $wpdb->posts as p ON t.urlrequested LIKE CONCAT('%',p.post_name,'%') OR t.urlrequested =''", "(ip IS NOT NULL) AND p.post_status = 'publish' AND (post_type = 'page' OR post_type = 'post')", "date", $graphdays);

	$LimitValuePeriode = ($pagePeriode * $graphdays) - $graphdays;
	$start_of_week = get_option('start_of_week');

	$strqry = "SELECT COUNT(distinct post_name)
					FROM $wpdb->posts as p
					JOIN $table_name as t
					ON t.urlrequested LIKE CONCAT('%', p.post_name, '_' )
					WHERE p.post_status = 'publish'
						AND t.feed<>''
						AND (p.post_type = 'page' OR p.post_type = 'post')
						AND t.date BETWEEN $limitdate AND $currentdate;
				";
	$NumberPosts = $wpdb->get_var($strqry);
	$NumberDisplayPost = $StatPressV_Option['StatPressV_Graph_Per_Page'];
	if ($NumberDisplayPost == 0)
		$NumberDisplayPost = 20;
	$NA = ceil($NumberPosts / $NumberDisplayPost);
	$LimitValueArticles = ($pa * $NumberDisplayPost) - $NumberDisplayPost;

	// sort post or page by most feeds
	$strqry = "SELECT  post_name, total, urlrequested
					FROM (
						(SELECT 'page_accueil' as post_name, count(DISTINCT ip) as total, urlrequested
							FROM $wpdb->posts as p
							JOIN $table_name as t ON urlrequested =''
							WHERE  p.post_status = 'publish' AND (p.post_type = 'page' OR p.post_type = 'post')
								AND t.spider=''
								AND t.feed<>''
								AND (t.date BETWEEN $limitdate AND $currentdate)
							GROUP BY post_name)
							UNION ALL
						(SELECT post_name, count(DISTINCT ip) as total, urlrequested
						FROM $wpdb->posts as p
							JOIN $table_name as t
							ON t.urlrequested LIKE CONCAT('%', p.post_name, '%' )
							WHERE p.post_status = 'publish' AND (p.post_type = 'page' OR p.post_type = 'post')
								AND t.spider=''
								AND t.feed<>''
								AND t.date BETWEEN $limitdate AND $currentdate
							GROUP BY post_name)
						) visitors
					GROUP BY post_name
					ORDER BY total DESC LIMIT $LimitValueArticles, $NumberDisplayPost;
				";
	$query = $wpdb->get_results($strqry);
	$spider = $StatPressV_Option['StatPressV_Dont_Collect_Spider'];

	echo "<div class='wrap'><h2>Most feeds these " . $graphdays . " days </h2>";
	luc_print_pp_pa_link($NP, $pp, $action, $NA, $pa);
	foreach ($query as $url)
	{
		$where1 = "  (urlrequested LIKE '" . $permalink . "feed%' OR urlrequested LIKE '" . $permalink . "comment%')  ";
		$where2 = " urlrequested LIKE '%" . $url->post_name . "%' ";
		if ($url->post_name == 'page_accueil') //url == home
			$total = luc_count_graph(luc_init_count_graph($graphdays, $pp), $graphdays, $pp, $where1, $where1, "feed<>''", "feed<>''", $limitdate, $currentdate);
		else //url<> home
			$total = luc_count_graph(luc_init_count_graph($graphdays, $pp), $graphdays, $pp, $where2, $where2, "feed<>''", "feed<>''", $limitdate, $currentdate);

		$maxxday = luc_maxxday($total, $graphdays, $pp);
		$px = luc_pixel($total, $graphdays, $maxxday, $pp, $action);

		if ($url->urlrequested == '')
			$out_url = "[Page]: Home";
		else
			$out_url = luc_post_title_Decode($permalink . $url->post_name);

		// Overhead of the graph, display the name of the post/page and the average by day of the feeds
		echo "<div class='wrap'>
				<table class='widefat'>
					<thead>
						<tr>
							<th scope='col' width='15%'>
								<div style='background:$rss_pageviews_color;width:10px;height:10px;float:left;margin-top:2px;margin-right:5px;'></div>" . $total->totalpageviews_feeds . " pages views
							</th>
							<th scope='col' width='15%'>
								<div style='background:$rss_pageviews_color;width:10px;height:10px;float:left;margin-top:2px;margin-right:5px;'></div>Average " . round($total->totalpageviews_feeds / $graphdays, 1) . " by day
							</th>
							<th scope='col' width='70%'>
								<font font-size='1'>" . $out_url . "</font>
							</th>
						</tr>
					</thead>
				</table>
				<table class='graph'>
					<tbody>
						<tr>";
		// THE GRAPH
		luc_graph($px, $total, $graphdays, $pp, $action);
		echo "			</tr>
					</tbody>
				</table>
			</div>";
	}
	luc_print_pp_pa_link($NP, $pp, $action, $NA, $pa);
	echo "</div>";
	luc_StatPressV_load_time();	
}
?>