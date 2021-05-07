# CSC227 Blog

A blog application written in Laravel 6.

## Install

### From source

```
git clone https://github.com/musashix90/csc227-blog
cd csc227-blog
php artisan migrate
```

### Using OpenShift web console

- Start a new project if one is not already created
- Open the project
- Click "Import YAML or JSON"
- Open a new browser tab to https://raw.githubusercontent.com/musashix90/csc227-blog/main/openshift/templates/laravel-mysql.json and select the contents to copy
- Paste the contents back into the Import YAML or JSON window
- Click "Create"
- When asked to add the template, make sure "Process the template" is checked, then click "Continue"
- You will be presented with a screen for setting environment variables.  The CSC227 Blog repo is prepopulated in the "Git Repository URL" variable.
- Click "Create"
- If there are no issues, you should now see a window stating the "Laravel + MySQL (Persistent)" template is ready to build.  Click "Close" to return to the project page.
- The deployment will need some time to complete, but you will now be presented with a URL that has been exposed.
