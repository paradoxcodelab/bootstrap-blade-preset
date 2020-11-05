const { Preset } = require('use-preset');

module.exports = Preset.make('laravel-bootstrap-blade-preset')
  .editJson('package.json')
    .title('Add frontend dependencies')
    .merge({
      devDependencies: {
        alpinejs: '^2',
        bootstrap: '^4.0.0',
        jquery: '^3.2',
        'popper.js': '^1.12',
        sass: '^1.15.2',
        'sass-loader': '^8.0.0',
      },
    })
    .chain()

  .editJson('composer.json')
    .title('Add Bootstrap Blade package')
    .merge({
			require: {
        'enigma/bootstrap-blade': 'dev-master',
        'livewire/livewire': '^2.0',
			}
		})
    .chain()

  .copyTemplates()

  .installDependencies()
    .for('node')
    .title('Install Node dependencies')
    .withoutAsking()
    .chain()

  .updateDependencies()
    .for('php')
    .title('Install PHP dependencies')
    .withoutAsking()
    .chain()

  .run('npm', ['run', 'dev'])
