## Send Normal Mail -
Run this all `command` step by step:

    ```bash
1. php artisan make:mail SendTestMail --markdown=emails.testmail

2. \Mail::to('nirob@gmail.com')->send(new \App\Mail\SendTestMail());

3. php artisan serv
    ```

## Send Mail with Database - Queue and Jobs -
Run this all `command` step by step:

    ```bash
1. php artisan make:job SendMailJobs
2. in handle method -----> \Mail::to('nirob@gmail.com')->send(new \App\Mail\SendTestMail());
3. in Route--------------> dispatch(new SendTestMail());
4. php artisan queue:table
5. php artisan migrate:fresh
6. php artisan serv
7. php artisan queue:listen
8. php artisan serv
    ```

## Send Mail with Redis - Queue and Jobs - `command:`
Open PowerShell as `Administrator` and run this command to enable Windows Subsystem for Linux `(WSL)`:

    ```bash
    Enable-WindowsOptionalFeature -Online -FeatureName Microsoft-Windows-Subsystem-Linux
    ```

### Launch Microsoft `Windows Store` and install ubuntu -
    
    ```bash
sudo apt-add-repository ppa:redislabs/redis
sudo apt-get update
sudo apt-get upgrade
sudo apt-get install redis-server
    ```

### Check Redis install or Not? -
redis-cli
ping

    ```bash
sudo service redis-server start
sudo service redis-server stop
sudo service redis-server restart
sudo service redis-server status
    ```
Run this all `command` in your project bash step by step:

    ```bash
composer require predis/predis
    ```

`Change Config/database `
		phpredis to predis

    ```bash
php artisan queue:listen
php artisan serv
    ```

## Connect with Me

Let's connect on [LinkedIn](https://www.linkedin.com/in/algaddafy/)!

## How to Contribute

Your contributions to this repository are highly encouraged! If you have a PDF resource that you believe would benefit others, please consider contributing by following these steps:

1. Fork this repository.
2. Add your PDF resource to the appropriate category or create a new category if needed.
3. Commit your changes.
4. Open a pull request.

Please make sure that the resources you contribute are relevant and adhere to the overall theme of the repository.

## Show Your Support

If you find this repository helpful, show your support by giving it a star! ⭐️

This repository is open-source. Feel free to use, share, and contribute.

Happy reading and happy coding!