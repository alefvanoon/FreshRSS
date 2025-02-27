<?php

return array(
	'archiving' => array(
		'_' => '归档',
		'delete_after' => '文章保留',
		'exception' => '清理例外策略',
		'help' => '具体选项位于各订阅源的设置',
		'keep_favourites' => '不清理已收藏的文章',
		'keep_labels' => '不清理标签',
		'keep_max' => '最多保留的文章数',
		'keep_min_by_feed' => '至少保留的文章数',
		'keep_period' => '文章最多保留',
		'keep_unreads' => '不清理未读文章',
		'maintenance' => '优化',
		'optimize' => '优化数据库',
		'optimize_help' => '偶尔执行优化可以减少数据库大小',
		'policy' => '清理策略',
		'policy_warning' => '如果未选择清理策略，则将保留全部文章。',
		'purge_now' => '立即清除',
		'title' => '存档',
		'ttl' => '最小自动刷新间隔',
	),
	'display' => array(
		'_' => '显示',
		'icon' => array(
			'bottom_line' => '底栏',
			'summary' => 'Summary', // TODO - Translation
			'display_authors' => '作者',
			'entry' => '文章图标',
			'publication_date' => '更新日期',
			'related_tags' => '相关标签',
			'sharing' => '分享',
			'top_line' => '顶栏',
		),
		'language' => '语言',
		'notif_html5' => array(
			'seconds' => '秒（0 表示不超时）',
			'timeout' => 'HTML5 通知超时时间',
		),
		'show_nav_buttons' => '显示导航按钮',
		'theme' => '主题',
		'title' => '显示',
		'width' => array(
			'content' => '内容宽度',
			'large' => '宽',
			'medium' => '中',
			'no_limit' => '无限制',
			'thin' => '窄',
		),
		'thumbnail' => array(
			'label' => 'Thumbnail', // TODO - Translation
			'none' => 'None', // TODO - Translation
			'portrait' => 'Portrait', // TODO - Translation
			'square' => 'Square', // TODO - Translation
			'landscape' => 'Landscape', // TODO - Translation
		),
	),
	'profile' => array(
		'_' => '用户管理',
		'api' => 'API 管理',
		'delete' => array(
			'_' => '账户删除',
			'warn' => '将删除你的帐户以及所有相关数据！',
		),
		'email' => '邮箱地址',
		'password_api' => 'API 密码<br /><small>（例如用于手机应用）</small>',
		'password_form' => '密码<br /><small>(用于 Web-form 登录方式)</small>',
		'password_format' => '至少 7 个字符',
		'title' => '用户帐户',
	),
	'query' => array(
		'_' => '自定义查询',
		'deprecated' => '此查询不再有效。相关的分类或订阅源已被删除。',
		'display' => '显示查询结果',
		'filter' => array(
			'_' => '生效的过滤器：',
			'categories' => '按分类显示',
			'feeds' => '按订阅源显示',
			'order' => '按日期排序',
			'search' => '表达式',
			'state' => '状态',
			'tags' => '按标签显示',
			'type' => '类型',
		),
		'get_all' => '显示所有文章',
		'get_category' => '显示分类 "%s"',
		'get_favorite' => '显示收藏文章',
		'get_feed' => '显示订阅源 "%s"',
		'get_tag' => '显示标签 "%s"',
		'name' => '名称',
		'no_filter' => '无过滤器',
		'none' => '你未创建任何自定义查询。',
		'number' => '查询 n°%d',
		'order_asc' => '由旧至新显示文章',
		'order_desc' => '由新至旧显示文章',
		'remove' => '删除查询',
		'search' => '搜索 "%s"',
		'state_0' => '显示所有文章',
		'state_1' => '显示已读文章',
		'state_2' => '显示未读文章',
		'state_3' => '显示所有文章',
		'state_4' => '显示收藏文章',
		'state_5' => '显示已读的收藏文章',
		'state_6' => '显示未读的收藏文章',
		'state_7' => '显示收藏文章',
		'state_8' => '显示未收藏文章',
		'state_9' => '显示已读的未收藏文章',
		'state_10' => '显示未读的未收藏文章',
		'state_11' => '显示未收藏文章',
		'state_12' => '显示所有文章',
		'state_13' => '显示已读文章',
		'state_14' => '显示未读文章',
		'state_15' => '显示所有文章',
		'title' => '自定义查询',
	),
	'reading' => array(
		'_' => '阅读',
		'after_onread' => '「全部标记为已读」后',
		'always_show_favorites' => '默认显示收藏夹中所有的文章',
		'articles_per_page' => '每页文章数',
		'auto_load_more' => '在页面底部载入下一篇文章',
		'auto_remove_article' => '阅读后隐藏文章',
		'confirm_enabled' => '「全部标记为已读」时显示确认对话框',
		'display_articles_unfolded' => '默认展开显示文章',
		'display_categories_unfolded' => '展开的分类',
		'hide_read_feeds' => '隐藏没有未读文章的分类或订阅源 (启用「显示所有文章」后不生效))',
		'img_with_lazyload' => '延迟加载图片',
		'jump_next' => '跳转到下一未读项（订阅源或分类）',
		'mark_updated_article_unread' => '将更新的文章设为未读',
		'number_divided_when_reader' => '阅读视图中显示一半',
		'read' => array(
			'article_open_on_website' => '在打开原文章后',
			'article_viewed' => '在文章被浏览后',
			'scroll' => '在滚动浏览后',
			'upon_reception' => '在接收文章后',
			'when' => '何时将文章标记为已读',
		),
		'show' => array(
			'_' => '文章显示',
			'active_category' => '激活的分类',
			'adaptive' => '智能显示',
			'all_articles' => '显示所有',
			'all_categories' => '所有分类',
			'no_category' => '无分类',
			'remember_categories' => '记住打开的分类',
			'unread' => '只显示未读',
		),
		'show_fav_unread_help' => '同样适用于标签',
		'sides_close_article' => '点击文章区域外以关闭',
		'sort' => array(
			'_' => '排列顺序',
			'newer_first' => '由新至旧',
			'older_first' => '由旧至新',
		),
		'sticky_post' => '打开文章时将其置于页首',
		'title' => '阅读',
		'view' => array(
			'default' => '默认视图',
			'global' => '全屏视图',
			'normal' => '普通视图',
			'reader' => '阅读视图',
		),
	),
	'sharing' => array(
		'_' => '分享',
		'add' => '添加分享方式',
		'blogotext' => 'Blogotext',
		'diaspora' => 'Diaspora*',
		'email' => '邮箱',
		'facebook' => '脸书',
		'more_information' => '更多信息',
		'print' => '打印',
		'raindrop' => 'Raindrop.io',
		'remove' => '删除分享方式',
		'shaarli' => 'Shaarli',
		'share_name' => '名称',
		'share_url' => '地址',
		'title' => '分享',
		'twitter' => '推特',
		'wallabag' => 'Wallabag',
	),
	'shortcut' => array(
		'_' => '快捷键',
		'article_action' => '文章操作',
		'auto_share' => '分享',
		'auto_share_help' => '如果有多种分享方式，则会按照它们的序号依次访问。',
		'close_dropdown' => '关闭菜单',
		'collapse_article' => '收起文章',
		'first_article' => '打开第一篇文章',
		'focus_search' => '聚焦到搜索框',
		'global_view' => '切换到全屏视图',
		'help' => '显示帮助文档',
		'javascript' => '若要使用快捷键，必须启用 JavaScript',
		'last_article' => '打开最后一篇文章',
		'load_more' => '载入更多文章',
		'mark_favorite' => '加入收藏',
		'mark_read' => '设为已读',
		'navigation' => '浏览',
		'navigation_help' => '组合 <kbd>⇧ Shift</kbd> 键，浏览快捷键将生效于订阅源。<br/>组合 <kbd>Alt ⎇</kbd> 键，浏览快捷键将生效于分类。',
		'navigation_no_mod_help' => '以下快捷键不支持组合键（Shift 或 Alt）',
		'next_article' => '打开下一篇文章',
		'non_standard' => '这些键 (<kbd>%s</kbd>) 可能不能作为快捷键',
		'normal_view' => '切换到普通视图',
		'other_action' => '其他操作',
		'previous_article' => '打开上一篇文章',
		'reading_view' => '切换到阅读视图',
		'rss_view' => '在新标签中打开 RSS 视图',
		'see_on_website' => '在原网站中查看',
		'shift_for_all_read' => '组合 <kbd>Alt ⎇</kbd>键 将上方的文章标记为已读<br />组合 <kbd>⇧ Shift</kbd>按键 可以将全部文章设为已读',
		'skip_next_article' => '跳转到下一篇文章而不打开',
		'skip_previous_article' => '跳转到上一篇文章而不打开',
		'title' => '快捷键',
		'toggle_media' => '播放/暂停媒体',
		'user_filter' => '显示自定义查询',
		'user_filter_help' => '如果有多个自定义过滤器，则会按照它们的序号依次访问。',
		'views' => '视图',
	),
	'user' => array(
		'articles_and_size' => '%s 篇文章 (%s)',
		'current' => '当前用户',
		'is_admin' => '该用户为管理员',
		'users' => '用户',
	),
);
