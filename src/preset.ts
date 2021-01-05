import {Preset} from 'apply';

Preset.setName('Laravel Bootstrap Blade Preset');

Preset.group((preset) => {
  preset.extract();
}).withTitle('Extracting templates...');

Preset.group((preset) => {
  preset
    .editNodePackages()
    .addDev('bootstrap', '^4.0.0')
    .addDev('jquery', '^3.2')
    .addDev('popper.js', '^1.12')
    .addDev('sass', '^1.15.2')
    .addDev('sass-loader', '^8.0.0')
    .addDev('alpinejs', '^2');
  preset.installDependencies();

  preset
    .editPhpPackages()
    .add('livewire/livewire', '^2.0')
    .add('enigma/bootstrap-blade', 'dev-master');
  preset.installDependencies('php');
}).withTitle('Installing dependencies...');

Preset.group((preset) => {
  preset.execute('npm', 'run', 'dev');
}).withTitle('Building assets...');
