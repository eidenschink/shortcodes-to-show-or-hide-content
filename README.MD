# Show/Hide Content at Set Time
![License](https://img.shields.io/badge/license-GPL--2.0%2B-green.svg)

### Welcome to the GitHub Repository

This is a (private )fork of the plugin [shortcodes-to-show-or-hide-content](https://wordpress.org/plugins/shortcodes-to-show-or-hide-content/) just to include the patches of the pull requests 27, 46 and 42 of the original repo and the result of a [rector](https://getrector.com/) run with e.g. LevelSetList::UP_TO_PHP_82 (but that was not really necessary). 

Note: Pull request 27 "Replace dashes with underscores in shortcode names" makes it necessary to rewrite existing shortcodes in your content from e.g. `[time-restrict]` to `[time_restrict]`. If you have a typo in your date spec e.g. `[time_restrict off="10-Septmber 2014"]` the exception will be catched, logged and an empty string will be returned.

## Original project ##
You can find the original project [here](https://github.com/theukedge/shortcodes-to-show-or-hide-content/). Thanks to the author! Please rate, like, subscribe and donate to the original author.