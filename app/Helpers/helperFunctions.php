<?php

// add custom global helper function here

use Illuminate\Support\Facades\Vite as ViteFacade;

if (!function_exists('module_vite_assets_unique_hot_path')) {
    /**
     * Support for vite assets with unique hot path
     *
     * @param array $assets
     * @param string|null $module
     * @param string|null $path
     * @return \Illuminate\Foundation\Vite
     */
    function module_vite_assets_unique_hot_path(array $assets, ?string $module = null, ?string $path = null): \Illuminate\Foundation\Vite
    {
        // build-vitetest
        $hot_path = $module ? "vite-$module.hot" : 'vite.hot';
        $hot_file = $path ?? storage_path($hot_path); // example: vite-build-theme.hot

        return ViteFacade::useHotFile($hot_file)
            ->useBuildDirectory($module ?? 'build')
            ->useManifestFilename('manifest.json')
            ->withEntryPoints($assets);
    }
}

if (!function_exists('module_vite_react_refresh')) {
    /**
     * Support for vite react HRM with unique hot path
     *
     * @param string|null $module
     * @param string|null $path
     * @return \Illuminate\Support\HtmlString
     */
    function module_vite_react_refresh(?string $module = null, ?string $path = null)
    {
        $hot_path = $module ? "vite-$module.hot" : 'vite.hot';
        $hot_file = $path ?? storage_path($hot_path); // example: vite-build-theme.hot

        return ViteFacade::useHotFile($hot_file)
            ->reactRefresh();
    }
}

if (!function_exists('module_asset')) {
    /**
     * Asset url
     *
     * @param string $file_location
     * @param string|null $module_name
     * @return string
     */
    function module_asset(string $file_location, ?string $module_name = null)
    {
        $build_path = 'build';
        $hot_path = storage_path('vite.hot');

        if ($module_name) {
            $module = \Nwidart\Modules\Facades\Module::find($module_name);
            $lower_name = $module->getLowerName();

            $build_path = "build-$lower_name";
            $hot_path = storage_path("vite-build-$lower_name.hot");
        }

        return ViteFacade::useBuildDirectory($build_path)
            ->useHotFile($hot_path)
            ->asset($file_location);
    }
}
