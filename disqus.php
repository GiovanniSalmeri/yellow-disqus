<?php
// Disqus extension, https://github.com/GiovanniSalmeri/yellow-disqus

class YellowDisqus {
    const VERSION = "0.8.8";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("disqusShortname", "yellow");
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="disqus" && ($type=="block" || $type=="inline") && !preg_match("/exclude/i", $page->get("comment"))) {
            $shortname = $this->yellow->system->get("disqusShortname");
            $url = $this->yellow->lookup->normaliseUrl(
                $this->yellow->system->get("coreServerScheme"),
                $this->yellow->system->get("coreServerAddress"),
                $this->yellow->system->get("coreServerBase"),
                $page->location);
            $language = $page->get("language");
            $output = "<div id=\"disqus_thread\" data-shortname=\"".htmlspecialchars($shortname)."\" data-url=\"".htmlspecialchars($url)."\" data-language=\"$language\"></div>\n";
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $extensionLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreExtensionLocation");
            $output = "<script type=\"text/javascript\" defer=\"defer\" src=\"{$extensionLocation}disqus.js\"></script>\n";
        }
        if ($name=="disqus" || $name=="comment") {
            $output = $this->onParseContentShortcut($page, "disqus", "", "block");
        }
        return $output;
    }
}
