<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php wp_title('·', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
   <svg id="svg-icons">
        <defs>
            <g id="icon-telephone">
                <title>Telephone</title>
                <path d="M15.331 19.76c-0.026-0.018-3.034-5.075-3.044-5.14-0.622-1.359-1.124-2.749-0.078-3.366l-4.341-7.32c-1.125 0.841-4.307 5.405 1.649 15.748 6.274 10.9 12.245 10.447 13.442 9.709l-4.23-7.145c-1 0.588-1.842-0.381-3.398-2.486zM25.862 26.617l0.001-0.006c0 0-3.303-5.566-3.305-5.568-0.262-0.441-0.825-0.58-1.264-0.324l-2.024 1.197 4.242 7.166c0 0 2.024-1.191 2.023-1.195h0.004c0.465-0.276 0.572-0.846 0.323-1.27zM14.786 9.736v-0.004c0.465-0.275 0.574-0.845 0.325-1.265l0.002-0.006c0 0-3.398-5.729-3.4-5.73-0.261-0.443-0.826-0.58-1.263-0.324l-2.024 1.197 4.336 7.324c0 0 2.023-1.189 2.024-1.192z"></path>
            </g>
            <g id="icon-expand">
                <title>Expand</title>
                <path d="M13.816 5.989l-7.785 0.046 0.003 7.735 2.59-2.591 3.454 3.454 2.665-2.665-3.453-3.454 2.526-2.525zM12.079 17.35l-3.454 3.455-2.59-2.592-0.003 7.799 7.785-0.018-2.526-2.525 3.454-3.453-2.666-2.666zM19.922 14.633l3.453-3.454 2.59 2.591 0.004-7.735-7.785-0.046 2.526 2.525-3.454 3.454 2.666 2.665zM23.375 20.805l-3.453-3.455-2.666 2.666 3.454 3.453-2.526 2.525 7.785 0.018-0.004-7.799-2.59 2.592z"></path>
            </g>
            <g id="icon-pdf">
                <title>PDF</title>
                <path d="M8.989,22.477H8.975c-0.173,0-0.293,0.021-0.339,0.045c-0.03,0.02-0.036,0.016-0.042,0.09v1.981 c0.483-0.014,0.808-0.071,0.938-0.144c0.24-0.126,0.378-0.4,0.381-0.907c-0.001-0.342-0.07-0.603-0.197-0.795 C9.606,22.58,9.383,22.479,8.989,22.477z M15.856,22.47c-0.235-0.004-0.362,0.052-0.382,0.083 c-0.009,0.004-0.043,0.088-0.04,0.235l-0.001,3.884c0.009,0.146,0.044,0.233,0.075,0.267h0.001 c0.007,0.018,0.11,0.063,0.305,0.062c0.542-0.002,0.969-0.155,1.306-0.46c0.317-0.282,0.504-0.879,0.502-1.802 c0-0.544-0.095-1-0.281-1.377C17.039,22.757,16.573,22.475,15.856,22.47z M26.938,1.23H5.062c-0.923,0-1.672,0.748-1.672,1.673 v26.193c0,0.925,0.749,1.673,1.672,1.673h21.876c0.923,0,1.672-0.748,1.672-1.673V2.903C28.61,1.979,27.861,1.23,26.938,1.23z M18.02,4.358h7.752v1.266H18.02V4.358z M18.02,7.728h7.752v1.266H18.02V7.728z M18.02,10.898h7.752v1.266H18.02V10.898z M6.016,4.364h9.986v7.778H6.016V4.364z M5.881,14.404h19.945v1.265H5.881V14.404z M5.881,17.532h12.247v1.265H5.881V17.532z M11.557,24.333c-0.19,0.258-0.492,0.454-0.894,0.6c-0.301,0.1-0.603,0.163-0.905,0.185c-0.272,0.018-0.659,0.029-1.163,0.029 v1.337c-0.002,0.276,0.063,0.422,0.124,0.461c0.07,0.058,0.272,0.114,0.585,0.122l0.135,0.004v0.474H5.965v-0.472l0.132-0.006 c0.302-0.016,0.495-0.078,0.552-0.132c0.055-0.039,0.115-0.185,0.113-0.451v-3.497c0.004-0.284-0.064-0.43-0.106-0.449 c-0.064-0.051-0.262-0.108-0.563-0.134l-0.127-0.012v-0.469H9.19c0.83,0.002,1.471,0.111,1.929,0.347 c0.471,0.234,0.72,0.682,0.715,1.249C11.834,23.81,11.739,24.086,11.557,24.333z M18.669,26.672 c-0.67,0.585-1.575,0.872-2.692,0.872h-3.171v-0.472l0.132-0.006c0.232-0.014,0.396-0.043,0.473-0.076 c0.142-0.065,0.188-0.138,0.195-0.307v-3.899c-0.007-0.161-0.051-0.229-0.185-0.298c-0.071-0.032-0.242-0.065-0.487-0.083 l-0.129-0.01v-0.471h3.07c1.202,0,2.138,0.265,2.795,0.814c0.596,0.497,0.898,1.184,0.896,2.013 C19.569,25.502,19.262,26.155,18.669,26.672z M26.171,23.796h-0.483l-0.026-0.104c-0.114-0.473-0.301-0.783-0.543-0.952 c-0.232-0.167-0.731-0.271-1.474-0.27c-0.271-0.004-0.445,0.036-0.458,0.054c-0.023,0.016-0.053,0.059-0.054,0.181v1.69 c0.423-0.01,0.693-0.101,0.811-0.229c0.156-0.157,0.289-0.435,0.379-0.831l0.024-0.109h0.495v2.95h-0.502l-0.019-0.119 c-0.063-0.409-0.188-0.691-0.355-0.854c-0.137-0.138-0.413-0.235-0.833-0.251v1.698c0.007,0.218,0.059,0.288,0.17,0.334 c0.132,0.053,0.359,0.084,0.667,0.084h0.216v0.478h-3.729v-0.476l0.135-0.002c0.266-0.008,0.45-0.041,0.531-0.082 c0.127-0.063,0.18-0.144,0.186-0.336v-3.823c-0.005-0.198-0.058-0.276-0.181-0.339c-0.07-0.032-0.26-0.069-0.539-0.083 l-0.132-0.006v-0.475h5.713V23.796z"/>
            </g>
            <g id="icon-hamburger">
                <title>Hamburger</title>
                <path d="M3 6h18v2.016h-18v-2.016zM3 12.984v-1.969h18v1.969h-18zM3 18v-2.016h18v2.016h-18z"></path>
            </g>
        </defs>
    </svg>
    <header class="site-header">
        <div class="inner">
            <div class="top-banner">
                <?php get_template_part('template-parts/header/logo'); ?>
                <a href="#" class="hamburger">
                    <svg viewBox="0 0 24 24"><use xlink:href="#icon-hamburger"></use></svg>
                </a>
                <?php get_template_part('template-parts/header/phone-link'); ?>
            </div>
            <?php wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => 'nav',
                'container_class' => 'main-nav',
                'fallback_cb' => false,
            )); ?>
        </div>
    </header>
    <div class="site-content">