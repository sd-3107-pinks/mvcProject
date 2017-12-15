<?php
//this is the controller for the index page.
class homepageController extends http\controller
{
    public static function show()
    {
//You could get fancy with the homepage and check for the userID in the session and hide/show the login / registration links when no session
//If there is a session then you should show the user profile link
//the template is an HTML page with PHP inserted in it.  just put an if/else statement to check for the session and show correct links
        $templateData['site_name'] = 'mysite';
        self::getTemplate('homepage', $templateData);
    }
}
?>