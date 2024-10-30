=== CellarWeb User Profile Access Control ===
Contributors: rhellewellgmailcom
Donate link: https://cellarweb.com/
Author URI: https://www.cellarweb.com
Plugin URI: https://www.cellarweb.com/wordpress-plugins/
Tags: user profile access control
Requires at least: 4.9.6
Tested up to: 6.5
Requires PHP: 7.2
Version: 1.01
Stable tag: trunk
Donate link: https://www.CellarWeb.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allows you to prevent individual users from editing/changing their user profile. User profile edit/change is allowed (and can't be blocked) for roles that have \'edit-user\' (administrator, etc)If the access is blocked, the user will not see the Profile choice in the admin area. Direct access to the profile page is also blocked by that user setting.

== Description ==

This plugin allows you to block specific users from accessing or changing their user profile.

A field is added to the user profile page to enable banning that user from editing/changing their user profile. User profile edit/change is allowed for roles that have \'edit-user\' (administrator, etc); those users will not have the 'blocking' option on their user profile page.

With that field added to the user profile screen, an administrator can set any user to not be able to access their profile settings. Users will see a message that they are unable to edit their profiled.  Administrator-level users will not see that extra field.

Another option will send an email to the admin whenever a profile is changed. This email will include all fields from the form, including any new password, so your administrator should be careful with that information when received. This is useful for sites that have a 'generic' user account that is used by many. You don't want someone to change that password.

== Installation ==
This section describes how to install the plugin and get it working.

1. Download the zip file, uncompress, then upload to `/wp-content/plugins/` directory. Or install via the Add Plugin page.
1. Activate the plugin through the \'Plugins\' menu in WordPress.
1. Change settings in Settings, \'Server Side Analytics\' to your requirements.

* Note: do a \"Save\" on the Server Side Analytics page once after an upgrade to ensure all is well; your settings will be preserved.


== Frequently Asked Questions ==

= Why would I want to use this plugin =

This is useful if you want to prevent users from accessing their user profile, such as changing their password. A blocked user won't be able to access their User Profile page.

= What about administrators? =

An administrator - or anyone with the 'edit-user' privileges - will not have that blocking field on thier user profile page. If that was allowed, then that administrative level user could not edit their own user profile. It would require direct access to the user database.

= Will the plugin notify me when a user profile is changed? =

Yes. The notification email, if enabled, will go to the email address specified in the Settings, General screen.

= What information will the adming get when a user profile is changed? =

The email will include the current contents/settings of all fields. Text fields that have had a change will also be sent.

This includes the password field, so be careful about who gets the email. There is a possibility of personal or security information being sent in clear text in that email.

= Why do you send the password information ? =

All fields on the user profile page are sent. The administrator may want to know if a password has changed, and if the password meets their security requirements.

Or, for a site that has a 'generic' user ID used by many people, the administrator will want to know when that password has changed, as that change would affect all people that used that generic user id.

= Can you specify user roles that will get the extra field? =

Not at this time, but it may be a future feature. Right now, the extra field is put on all user profiles that have the 'edit-user' privilege.

= Can you specify the user that gets the notification email? =

Not at this time, but that is also a possible future feature. With this version, the email is the one specified on the Settings, General screen.

= What about [some new feature]? =

We're always open to new ideas. Use the contact link on the settings page, or the "Support" forum on the plugin page.

= What if something doesn't work? =

Use the "Support" forum on the plugin page. We'll try to respond within 48 hours.

== Screenshots ==
1. Settings Screen

== Changelog ==

= Version 1.01 (7 Apr 2022) =
* minor changes to assets images
* add tested to WP 6.0


= Version 1.00 (28 Mar 2022) - Initial Release =

== Upgrade Notice ==
= Version 1.00 (28 Mar 2022) - Initial Release =