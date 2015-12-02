Yoast SEO Nuke Noob Stuff
=====================

A simple WordPress plugin to nuke the noob things in WP SEO (*Yoast SEO*).
Stable tag: 1.1.1
WP.org Link: [https://wordpress.org/plugins/wpseo-nuke-noob-stuff/](https://wordpress.org/plugins/wpseo-nuke-noob-stuff/)

### It currently disables the following
* Yoast SEO Posts Overview dashboard metabox
* Keyword Research sub-menu from the admin bar
* "All SEO Scores" dropdown select on posts & pages listings
* SEO dot, SEO Title, Meta Desc, & Focus KW columns on posts & pages listings
* SEO Score Traffic Light from Publish metabox

#### What else I want it to do later
* "Focus Keyword" input section(s), content analysis, and 'traffic lights'. That said with v3.x that'd be a LOT of hacky stuff without there being proper filters to disable that.

All respect to the WPSEO (*Yoast SEO*) crew still. A while ago I opened a proposal in their github repo to address this: [https://github.com/Yoast/wordpress-seo/issues/869](https://github.com/Yoast/wordpress-seo/issues/869). Later I submitted a [Pull Request *#2498*](https://github.com/Yoast/wordpress-seo/pull/2498) to sensibly extend the filter to not display the Page Analysis tab, or the content within, in the WPSEO_Metabox, which was closed as they're supposedly going to update it all soon.

But until then here's a plugin to do it.
