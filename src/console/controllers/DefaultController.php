<?php
/**
 * Feed Me plugin for Craft CMS 3.x
 *
 * etc
 *
 * @link      fddf.com
 * @copyright Copyright (c) 2018 fdfd
 */

namespace verbb\feedme\console\controllers;

use verbb\feedme\FeedMe;

use Craft;
use yii\console\Controller;
use yii\helpers\Console;

/**
 * Default Command
 *
 * The first line of this class docblock is displayed as the description
 * of the Console Command in ./craft help
 *
 * Craft can be invoked via commandline console by using the `./craft` command
 * from the project root.
 *
 * Console Commands are just controllers that are invoked to handle console
 * actions. The segment routing is plugin-name/controller-name/action-name
 *
 * The actionIndex() method is what is executed if no sub-commands are supplied, e.g.:
 *
 * ./craft feed-me/default
 *
 * Actions must be in 'kebab-case' so actionDoSomething() maps to 'do-something',
 * and would be invoked via:
 *
 * ./craft feed-me/default/do-something
 *
 * @author    fdfd
 * @package   FeedMe
 * @since     1
 */
class DefaultController extends Controller
{
    // Public Methods
    // =========================================================================

    /**
     * Handle feed-me/default console commands
     *
     * The first line of this method docblock is displayed as the description
     * of the Console Command in ./craft help
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'something';

        echo "Welcome to the console DefaultController actionIndex() method\n";

        return $result;
    }

    public function actionFeedMeList()
    {
        $feeds = FeedMe::$plugin->feeds->getFeeds();

        /** @var FeedMe_FeedModel $feed */
        foreach ($feeds as $feed) {
            $feedInfo =  $feed->id . ": " . $feed->name . ": " . $feed->feedUrl;
            echo $feedInfo;

        }
    }


    /**
     * Handle feed-me/default/do-something console commands
     *
     * The first line of this method docblock is displayed as the description
     * of the Console Command in ./craft help
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'something';

        echo "Welcome to the console DefaultController actionDoSomething() method\n";

        return $result;
    }
}
