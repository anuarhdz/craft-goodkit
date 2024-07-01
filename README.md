# Craft CMS Goodkit

This Craft CMS 5 starter kit is a modern front-end development workflow for Craft CMS that combines the latest front-end technologies and tools with best practices. It's designed to help you get up and running quickly and optimize your project for production.

## Stack

- [Craft CMS 5](https://craftcms.com/)
- [DDEV](https://ddev.com/)
- [Vite](https://vitejs.dev/)
- [Tailwind CSS](https://tailwindcss.com/)
- [Alpine](https://alpinejs.dev/)
- [Prettier](https://prettier.io/)

## Getting Started

In order to get started with Craft CMS Goodkit, you'll need to have docker and ddev installed on your machine. 

I love use [OrbStack](https://orbstack.dev/) as a Docker Desktop alternative, but you can use the official Docker Desktop as well. 

Refer to the [DDEV documentation](https://ddev.readthedocs.io/en/stable/) for more information on how to install DDEV.

1. Make sure that you have Docker and DDEV installed.

2. Run `composer create-project anuarhdz/craft-goodkit ./YOUR/PROJECT/PATH --no-install` to create a new Craft CMS Goodkit project. Replace `YOUR/PROJECT/PATH` with the path where you want to create the project.

3. Run `ddev config --project-name=YOUR_PROJECT_NAME` to configure the DDEV environment. Replace `YOUR_PROJECT_NAME` with the name of your project.

4. Navigate to the project directory and run `ddev start`. This will start the DDEV environment.
 