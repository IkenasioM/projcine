<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerC6fxaqr\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerC6fxaqr/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerC6fxaqr.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerC6fxaqr\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerC6fxaqr\appDevDebugProjectContainer(array(
    'container.build_hash' => 'C6fxaqr',
    'container.build_id' => 'cddab7c7',
    'container.build_time' => 1519815625,
));
