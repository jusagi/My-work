<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRWqDVMr\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRWqDVMr/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerRWqDVMr.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerRWqDVMr\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerRWqDVMr\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'RWqDVMr',
    'container.build_id' => '861941ab',
    'container.build_time' => 1536559405,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerRWqDVMr');