<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTXQXjkl\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTXQXjkl/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTXQXjkl.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTXQXjkl\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTXQXjkl\App_KernelDevDebugContainer([
    'container.build_hash' => 'TXQXjkl',
    'container.build_id' => 'cda3b961',
    'container.build_time' => 1620550566,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTXQXjkl');
