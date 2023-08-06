<?php


namespace Tests\Acceptance;

use Tests\Support\Page\Acceptance\LoginPage;
use Tests\Support\Step\Acceptance\LoginStep;

class LoginCest
{
    public function show_home_page_when_data_login_successfully(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('hangtt@gmail.com', '123456789'); //tc1
        $loginPage->checkRememberMe()->clickLoginButton();
        $loginStep->retrySee('Dashboard');
    }
    public function show_home_page_when_data_login_successfully_uncheck(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('hangtt@gmail.com', '123456789'); //tc2
        $loginPage->clickLoginButton();
        $loginStep->retrySee('Dashboard');
    }

    public function show_error_message_when_data_login_blank(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('', ''); //tc3
        $loginPage->checkRememberMe()->clickLoginButton();
        $loginStep->retrySee('Login');
    }
    public function show_error_message_when_data_login_blank_uncheck(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('', ''); //tc4
        $loginPage->clickLoginButton();
        $loginStep->retrySee('Login');
    }

    public function show_error_message_when_data_email_blank(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('', '123456789'); //tc5
        $loginPage->checkRememberMe()->clickLoginButton();
        $loginStep->retrySee('Login');
    }
    public function show_error_message_when_data_email_blank_uncheck(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('', '123456789'); //tc6
        $loginPage->clickLoginButton();
        $loginStep->retrySee('Login');
    }

    public function show_error_message_when_data_password_blank(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('hangtt@gmail.com', ''); //tc7
        $loginPage->checkRememberMe()->clickLoginButton();
        $loginStep->retrySee('Login');
    }

    public function show_error_message_when_data_password_blank_uncheck(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('hangtt@gmail.com', ''); //tc8
        $loginPage->clickLoginButton();
        $loginStep->retrySee('Login');
    }

    public function show_error_message_when_data_email_error(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('hangttgmail.com', '123456789'); //tc9
        $loginPage->checkRememberMe()->clickLoginButton();
        $loginStep->retrySee('Login');
    }
    public function show_error_message_when_data_email_error_uncheck(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('hangttgmail.com', '123456789'); //tc10
        $loginPage->clickLoginButton();
        $loginStep->retrySee('Login');
    }


    public function show_error_message_when_data_password_error(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('hangtt@gmail.com', '00000000'); //tc11
        $loginPage->checkRememberMe()->clickLoginButton();
        $loginStep->retrySee('These credentials do not match our records.');
    }
    public function show_error_message_when_data_password_error_uncheck(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('hangtt@gmail.com', '00000000'); //tc12
        $loginPage->clickLoginButton();
        $loginStep->retrySee('These credentials do not match our records.');
    }

    public function show_error_message_when_data_email_and_password_error(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('hangttdehatmu@gmail.com', '00000000'); //tc13
        $loginPage->checkRememberMe()->clickLoginButton();
        $loginStep->retrySee('These credentials do not match our records.');
    }
    public function show_error_message_when_data_email_and_password_error_uncheck(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('hangttdehatmu@gmail.com', '00000000'); //tc14
        $loginPage->clickLoginButton();
        $loginStep->retrySee('These credentials do not match our records.');
    }
    public function show_forgot_password_screen_success(LoginStep $loginStep, LoginPage $loginPage)
    {
        $loginStep->login('', ''); //tc15
        $loginPage->clickForgotPassword();
        $loginStep->retrySee('Reset Password');
    }
}


?>