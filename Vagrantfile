# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  config.vm.box = "ubuntu/trusty64"
  config.vm.box_check_update = false
  config.vm.hostname = "wp-dev-themes"

  config.vm.network "forwarded_port", guest: 80, host: 8080
  
  config.vm.provision "shell", path: "setup/provision.sh"

  config.vm.provider "virtualbox" do |vb|
     vb.name = "WP-Themes"
     vb.memory = "1024"
     vb.cpus = 2
  end
end
