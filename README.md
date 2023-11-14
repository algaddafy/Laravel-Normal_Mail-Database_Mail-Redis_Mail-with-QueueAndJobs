Install and Run Commands for this Projects
==========================================

### Send Normal Mail -

| Command | Description |
| ------- | ----------- |
| `php artisan make:mail SendTestMail --markdown=emails.testmail` | Make Mail Class Setup |
| `\Mail::to('nirob@gmail.com')->send(new \App\Mail\SendTestMail())` | Write in in the Route |
| `php artisan serv` | Run the server |


### Send Mail with Database - Queue and Jobs -

| Command | Description |
| ------- | ----------- |
| `php artisan make:job SendMailJobs` | Make Job Class |
| `\Mail::to('nirob@gmail.com')->send(new \App\Mail\SendTestMail())` | Write in handle method |
| `dispatch(new SendTestMail());` | Write in Route |
| `php artisan queue:table` | Make a migration table for queue jobs |
| `php artisan migrate:fresh` | Migrate fresh database |
| `php artisan serv` | Run the server |
| `php artisan queue:listen` | Running Queues in the server |
| `php artisan serv` | Run the server |

### Send Mail with Redis - Queue and Jobs -

Open PowerShell as `Administrator` and run this command to enable Windows Subsystem for Linux `(WSL)`:

| Command | Description |
| ------- | ----------- |
| `Enable-WindowsOptionalFeature -Online -FeatureName Microsoft-Windows-Subsystem-Linux` | For Linux environment |

Launch Microsoft `Windows Store` and install ubuntu -

| Command | Description |
| ------- | ----------- |
| `sudo apt-add-repository ppa:redislabs/redis` | Add repo for redis in the linux server |
| `sudo apt-get update` | Update linux server |
| `sudo apt-get upgrade` | Upgrade linux server |
| `sudo apt-get install redis-server` | Install redis in the linux server |

Check Redis install or Not? -

| Command | Description |
| ------- | ----------- |
| `redis-cli` | Check redis is running or not |
| `ping` | Hit ping for pong |
| `sudo service redis-server start` | For redis server start |
| `sudo service redis-server stop` | For redis server stop |
| `sudo service redis-server restart` | For redis server restart |
| `sudo service redis-server status` | For redis server status |

Run this `command` in your project bash step by step:

| Command | Description |
| ------- | ----------- |
| `composer require predis/predis` | Install Dependencies in laravel project |

`Change Config/database `

| Command | Description |
| ------- | ----------- |
| `phpredis to predis` | Change on this file |

Run this all `commands` in your project bash step by step:

| Command | Description |
| ------- | ----------- |
| `php artisan queue:listen` | Running Queues in the server |
| `php artisan serv` | Run the server |

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