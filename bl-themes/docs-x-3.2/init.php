<?php
$GITHUB_BASE_URL = 'https://github.com/jeremehancock/docs.ubuntuce.com-content/blob/main/pages/';
$FILENAME = 'index.md';

$REDIRECT_PARENT_TO_FIRST_CHILD = true;

if (!$site->homepage()) {
        echo 'This theme need a home page, please select one page from <b>Admin panel->Settings->Advanced->Home page</b>';
        exit;
}

if ($REDIRECT_PARENT_TO_FIRST_CHILD) {
	if (!empty($page)) {
		if ($page->isParent() && $page->hasChildren()) {
			$children = $page->children();
			if (!empty($children[0])) {
				$firstChild = $children[0];

				header('Location: '.$firstChild->permalink(), true, 302);
				exit;
			}
		}
	}
}
