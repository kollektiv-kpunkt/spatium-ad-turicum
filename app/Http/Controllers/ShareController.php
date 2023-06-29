<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\TrackerProvider;

class ShareController extends Controller
{

    public function share($platform) {
        if (!in_array($platform, ["facebook", "twitter", "whatsapp", "email", "telegram"])) {
            return redirect("/");
        }
        $tracker = new TrackerProvider();
        $tracker->doTrackEvent("Share", "Share", $platform);
        $shareUrl = __("sat.site.url");
        if ((isset($_GET["source"]) && $_GET["source"] != "") || (isset($_COOKIE["sat_source"]) && $_COOKIE["sat_source"] != "")) {
            $source = isset($_GET["source"]) ? $_GET["source"] : $_COOKIE["sat_source"];
            $shareUrl .= "/s/{$source}";
            $shareText = str_replace("https://zueri-brucht-platz.ch", $shareUrl, __("sat.share.text"));
        } else {
            $shareText = __("sat.share.text");
        }
        $sharerUrl = urlencode($shareUrl);
        $shareText = urlencode($shareText);
        $shareTitle = urlencode(__("sat.share.sharetitle"));
        $shareTitleEmail = str_replace("+", "%20", $shareTitle);
        $shareTweet = urlencode(__("sat.share.tweet"));
        $shareTextEmail = str_replace("+", "%20", $shareText);
        $sep = urlencode("\n");
        switch ($platform) :
            case "facebook":
                $sharerUrl = "https://www.facebook.com/sharer/sharer.php?u={$shareUrl}";
                break;
            case "twitter":
                $sharerUrl = "https://twitter.com/intent/tweet?text={$shareTweet}";
                break;
            case "whatsapp":
                $sharerUrl = "https://api.whatsapp.com/send?text={$shareText}";
                break;
            case "telegram":
                $sharerUrl = "https://t.me/share/url?url={$shareUrl}&text={$shareText}";
                break;
            case "email":
                $sharerUrl = "mailto:?subject={$shareTitleEmail}&body={$shareTextEmail}";
                break;
        endswitch;
        return redirect($sharerUrl);
    }
}
