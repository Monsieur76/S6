<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAPIBm4g\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAPIBm4g/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAPIBm4g.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAPIBm4g\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerAPIBm4g\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'APIBm4g',
    'container.build_id' => 'fb3c752b',
    'container.build_time' => 1563465079,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAPIBm4g');
