WPSEO Nuke Noob Stuff
=====================

A simple WordPress plugin to nuke the noob things in WP SEO (*Yoast SEO*).
Stable tag: 1.1.1
WP.org Link: [https://wordpress.org/plugins/wpseo-nuke-noob-stuff/](https://wordpress.org/plugins/wpseo-nuke-noob-stuff/)

### It currently disables the following
* "All SEO Scores" dropdown select on posts & pages listings
* SEO dot, SEO Title, Meta Desc, & Focus KW columns on posts & pages listings
* "SEO: (dot) Check" in publish metabox
* "Page Analysis" tab content in posts metabox

#### What else I want it to do later
* "SEO" dropdown from admin bar. doesn't annoy enough to fix
* "Focus Keyword" input section and entire tab in the post/page screen metabox

All respect to the WPSEO (*Yoast SEO*) crew still. A while ago I opened a proposal in their github repo to address this: [https://github.com/Yoast/wordpress-seo/issues/869](https://github.com/Yoast/wordpress-seo/issues/869). Later I submitted a [Pull Request *#2498*](https://github.com/Yoast/wordpress-seo/pull/2498) to sensibly extend the filter to not display the Page Analysis tab, or the content within, in the WPSEO_Metabox, which was closed as they're supposedly going to update it all soon.

But until then here's a plugin to do it.
