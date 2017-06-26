<?php
# MantisBT - a php based bugtracking system

# MantisBT is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 2 of the License, or
# (at your option) any later version.
#
# MantisBT is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with MantisBT.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package MantisBT
 * @copyright Copyright (C) 2000 - 2002  Kenzaburo Ito - kenito@300baud.org
 * @copyright Copyright (C) 2002 - 2014  MantisBT Team - mantisbt-dev@lists.sourceforge.net
 * @link http://www.mantisbt.org
 */

# This sample file contains the essential files that you MUST
# configure to your specific settings.  You may override settings
# from config_defaults_inc.php by uncommenting the config option
# and setting its value in this file.

# Rename this file to config_inc.php after configuration.

# In general the value OFF means the feature is disabled and ON means the
# feature is enabled.  Any other cases will have an explanation.

# Look in http://www.mantisbt.org/docs/ or config_defaults_inc.php for more
# detailed comments.

# --- Database Configuration ---
$g_hostname      = 'db';
$g_db_username   = 'root';
$g_db_port       = '3306';
$g_db_password   = 'karudev19871029';
$g_database_name = 'bugtracker';
$g_db_type       = 'mysqli';

# --- Anonymous Access / Signup ---
$g_allow_signup				= ON;
$g_allow_anonymous_login	= OFF;
$g_anonymous_account		= '';

# --- Email Configuration ---
$g_phpMailer_method		= PHPMAILER_METHOD_SMTP; # or PHPMAILER_METHOD_SMTP, PHPMAILER_METHOD_SENDMAIL
$g_smtp_host			= 'smtp.karudev.fr';			# used with PHPMAILER_METHOD_SMTP
$g_smtp_username		= 'renault@karudev.fr';					# used with PHPMAILER_METHOD_SMTP
$g_smtp_password		= 'karudevcnm';					# used with PHPMAILER_METHOD_SMTP
$g_smtp_port = 587;
$g_administrator_email  = 'renault@karudev.fr';
$g_webmaster_email      = 'renault@karudev.fr';
$g_from_email           = 'renault@karudev.fr';	# the "From: " field in emails
$g_return_path_email    = 'renault@karudev.fr';	# the return address for bounced mail
 $g_from_name			= 'Karudev Support';
# $g_email_receive_own	= OFF;
# $g_email_send_using_cronjob = OFF;

# --- Attachments / File Uploads ---
# $g_allow_file_upload	= ON;
# $g_file_upload_method	= DATABASE; # or DISK
# $g_absolute_path_default_upload_folder = ''; # used with DISK, must contain trailing \ or /.
$g_max_file_size		= 20000000;	# in bytes
# $g_preview_attachments_inline_max_size = 256 * 1024;
# $g_allowed_files		= '';		# extensions comma separated, e.g. 'php,html,java,exe,pl'
# $g_disallowed_files		= '';		# extensions comma separated

# --- Branding ---
$g_window_title			= 'Karudev Support';
$g_logo_image			= 'images/mantis_logo.png';
$g_favicon_image		= 'images/favicon.png';

# --- Real names ---
$g_show_realname = ON;
# $g_show_user_realname_threshold = NOBODY;	# Set to access level (e.g. VIEWER, REPORTER, DEVELOPER, MANAGER, etc)

# --- Others ---
$g_default_language = 'french';
# $g_default_home_page = 'my_view_page.php';	# Set to name of page to go to after login
$g_status_enum_string= '10:new,20:feedback,30:in dev,40:resolved in dev,50:assigned,70:resolved in beta,80:resolved,90:closed'; 
$g_status_colors = array( 'new' => '#ffa0a0',
'feedback' => '#FFC9FD', # purple
'in dev' => '#ffffb0', # orange
'resolved in dev' => '#ffd850', # yellow
'assigned' => '#9EF4F7', # blue
'resolved in beta' => '#93BFF2', # cyan
'resolved' => '#cceedd', # buish-green
'closed' => '#e8e8e8'); # light gray

