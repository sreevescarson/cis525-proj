# sds-vagrant-container-builder

Information for setting up different container builders

The vagrant file will create a virtual machine with the build environment for testing


# Buildah
* This development environment has buildah in it.
* Here are some official tutorials: https://github.com/containers/buildah/tree/master/docs/tutorials
* Inspecting an image in the build process:
  *  You can use ```sudo buildah run $(sudo buildah from centos:centos7.6.1810) bash``` to check out a base container and run bash inside the container.  This is useful for debugging issues in the build process
  *  To see where a working container is mounted on your filesystem: ```export newcontainer=$(sudo buildah from working-container-name); sudo buildah mount $newcontainer```


# Troubleshooting
* Something like the following means that you are missing a sudo somewhere:
    
      $sudo buildah run $(buildah from centos:centos7.6.1810) bash
      ERRO[0000] error reading allowed ID mappings: error reading subuid mappings for user "vagrant" and subgid mappings for group "vagrant": No subuid ranges found for user "vagrant" in /etc/subuid command must be specified
