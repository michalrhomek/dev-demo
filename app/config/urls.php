<?php



// SMARTY CONFIGURATION
$config->url = (object) array(
	"/" => (object) array(
		"tpl_file"			=> "index.tpl",
		"tpl_file_content"	=> "homepage.tpl",
		"page_title"		=> "Modular responsive front-end framework"
	),
	"download/website/" => (object) array(
		"tpl_file"			=> "index.tpl",
		"tpl_file_content"	=> "download/website.tpl",
		"page_title"		=> "Download from website"
	),
	"download/github/" => (object) array(
		"tpl_file"			=> "index.tpl",
		"tpl_file_content"	=> "download/github.tpl",
		"page_title"		=> "Download from Github"
	),

	// INSTALLATION
	"installation/git-submodules/" => (object) array(
		"tpl_file"			=> "index.tpl",
		"tpl_file_content"	=> "installation/git_submodules.tpl",
		"page_title"		=> "Installation - Git Submodules"
	),
	"installation/bower/" => (object) array(
		"tpl_file"			=> "index.tpl",
		"tpl_file_content"	=> "installation/bower.tpl",
		"page_title"		=> "Installation - bower"
	),
	"installation/manual/" => (object) array(
		"tpl_file"			=> "index.tpl",
		"tpl_file_content"	=> "installation/manual.tpl",
		"page_title"		=> "Installation - manual"
	),

	// COMPONENTS
	"components/reset/" => (object) array(
		"tpl_file"			=> "index.tpl",
		"tpl_file_content"	=> "components/reset.tpl",
		"page_title"		=> "Components - reset"
	),
	"components/grid/" => (object) array(
		"tpl_file"			=> "index.tpl",
		"tpl_file_content"	=> "components/grid.tpl",
		"page_title"		=> "Components - grid"
	),
	"components/buttons/" => (object) array(
		"tpl_file"			=> "index.tpl",
		"tpl_file_content"	=> "components/buttons.tpl",
		"page_title"		=> "Components - buttons"
	),
	"components/forms/" => (object) array(
		"tpl_file"			=> "index.tpl",
		"tpl_file_content"	=> "components/forms.tpl",
		"page_title"		=> "Components - forms"
	),
	"components/tables-lists/" => (object) array(
		"tpl_file"			=> "index.tpl",
		"tpl_file_content"	=> "components/tables-lists.tpl",
		"page_title"		=> "Components - tables - lists"
	),

	// OTHER
	"report-bug/" => (object) array(
		"tpl_file"			=> "index.tpl",
		"tpl_file_content"	=> "report-bug.tpl",
		"page_title"		=> "Report bug"
	),
	"contributing/" => (object) array(
		"tpl_file"			=> "index.tpl",
		"tpl_file_content"	=> "contribute.tpl",
		"page_title"		=> "Contributing"
	),
);


?>