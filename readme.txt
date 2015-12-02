=== Yoast SEO Nuke Noob Stuff ===
Contributors: ryno267
Donate link:
Tags: admin, wpadmin, wp-admin, admin toolbar, admin ui, admin interface, seo, SEO, Yoast SEO, WordPress SEO, WordPress SEO by Yoast, wpseo, yoast, seo pack
Requires at least: 3.9
Tested up to: 4.4
Stable tag: 1.1.1
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl.html

Built to extend Yoast SEO WordPress plugin by removing some of the basic noob things like the SEO color dot and extra columns on pages and posts.

== Description ==
This WordPress plugin is built to extend and remove the noob things in the Yoast SEO (WPSEO / WordPress SEO) plugin for you or clients who don't care and just want a good plain technical SEO plugin.

**It currently disables / removes the following**

* Yoast SEO Posts Overview dashboard metabox
* Keyword Research sub-menu from the admin bar
* "All SEO Scores" dropdown select on posts & pages listings
* SEO dot, SEO Title, Meta Desc, & Focus KW columns on posts & pages listings
* SEO Score Traffic Light from Publish metabox

**What else I want it to do later if ever possible**

* "Focus Keyword" input section(s), content analysis, and 'traffic lights'. That said with v3.x that'd be a LOT of hacky stuff without there being proper filters to disable that.


All respect to the Yoast SEO crew (*joostdevalk & team*) still. A while ago I opened a proposal in their github repo to address this: [WP SEO Issue *#869*](https://github.com/Yoast/wordpress-seo/issues/869) and later a [Pull Request *#2498*](https://github.com/Yoast/wordpress-seo/pull/2498) to try and address the post admin box content.

Feel free to comment in there that you want this implemented as an option or a more advanced filter - But until then here's a plugin to do it.

If you think you'd like to contribute [on Github](https://github.com/chuckreynolds/wpseo-nuke-noob-stuff), that'd be rad.


== Installation ==
1. Search via your wp-admin > plugins > Add New for "WPSEO Nuke Noob Stuff" and install
1. OR Download then Upload the `wpseo-nuke-noob-stuff` folder to the `/wp-content/plugins/` directory
1. Activate the plugin
1. That's it. seriously. Everything is done already. Enjoy.

== Changelog ==
= 2.0.0 =
* test to wp 4.4
* remove keyword research sub-menu from admin bar but leaves the settings links which are still useful
* remove yoast seo posts overview dashboard widget
* remove traffic light seo score from admin publish metabox

= 1.1.1 =
* test to 4.2.2
* mod plugin header info for WP repo
= 1.1.0 =
* test to wp 4.2
= 1.0.0 =
* get this into the wild as others may want it

== Upgrade Notice ==


== Other Notes ==
