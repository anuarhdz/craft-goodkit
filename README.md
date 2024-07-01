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

### Prerequisites

In order to install and run this repository correctly, verify that you have installed:

- [Docker](https://docker.com). I recommend using [OrbStack](https://orbstack.dev).
- [DDEV](https://ddev.com/). Check the [installation documentation](https://ddev.readthedocs.io/en/stable/).
- [VSCode](https://code.visualstudio.com/) and [Dev Containers extension](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers).

### Installation from Scratch

1. Make sure that you have Docker and DDEV installed.

2. Run `composer create-project anuarhdz/craft-goodkit ./YOUR/PROJECT/PATH --no-install` to create a new Craft CMS Goodkit project. Replace `YOUR/PROJECT/PATH` with the path where you want to create the project.

3. Run `ddev config --project-name=YOUR_PROJECT_NAME` to configure the DDEV environment. Replace `YOUR_PROJECT_NAME` with the name of your project.

4. Navigate to the project directory and run `ddev start`. This will start the DDEV environment. If everything is configured correctly, you will see a message similar to the following: 

```zsh
Your project can be reached at https://YOUR_PROJECT_NAME.ddev.site https://127.0.0.1:XXXXX
```
5. Now you can run `ddev code` to open the project in VSCode. 

If VSCode correctly starts the project inside a dev container and you can access the URL of your project, you have correctly configured the repository.