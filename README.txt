To install:

1. Clone this repository
2. Run ./install_site_setup
3. Update the script settings file at /path/to/repo/settings/settings.conf

## Other info

You can also use the modular scripts to create a drupal db (createdrupaldb),
create apache config files (createapacheconfig), or download a specific
version of drupal (dldrupal)

### dldrupal ###

Downloads a specific version of drupal to the specified location.

Arguments:

-v | --download-version <version>
	Sets the version of drupal to download.

-l | --download-location <location>
	Sets the location to download the files to.

-n | --no-unpack
	Don't unzip the files, just leave the downloaded zip in the directory
	set by --download-location.

### createapacheconf ###

Creates an apache configuration file for a given site. Will also set up a
redirect for missing images on dev to a production/stage server.

Arguments:

-d | --directory <my_new_project>
	Sets the base directory of the project

-l | --live-site <example.com>
	Sets the current live site of the site. If there currently isn't a
	live site, you can use example.com

-r | --site-root <htdocs>
	Sets the docroot of the project.

-s | --dev-site <project>
	Set the lowest level domain of the site, for example "project"
	in "project.home.seanbeaton.com"

### createdrupaldb ###

Creates a drupal database for a specified project.

Arguments:

-n | --project-name|--project <my_new_project-4.1.1>
	The name of the project you want to create a database for. Will be
	escaped.

-c | --project-clean <my_new_project_4_1_1>
	The safe name of the project you want to create a database for. This
	should already be escaped

-u | --db-user <my_site_dev_user>
	The user you will use to connect to mysql through your drupal site.

-m | --mysql-user <root>
	Usually, the mysql root user. Should be able to create new databases.

-p | --mysql-password <password>
	The password for the mysql user provided by "--mysql-user".

-t | --template-script-location
	The location of the template script. This is provided by the settings.conf
	file, but if you want to structure the default file differently, you can
	change this variable. The default is usually
	/app/dev-creation-script/resources/default.database_create.sql

-d | --db-scripts-location
	The location for the generated sql scripts. This is provided by the
	settings.conf file, but if for some reason you want to change this location,
	you can use this variable. The default is usually
	/app/dev-creation-script/resources/projects

