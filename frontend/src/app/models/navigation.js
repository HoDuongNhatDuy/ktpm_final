export const navigation = {
  brand:      'reactDirectorAdmin',
  leftLinks:  [],
  rightLinks: [
    {
      label:      'Home',
      link:       '/',
      view:       'home',
      isRouteBtn: true
    },
    {
      label:      'About',
      link:       '/about',
      view:       'about',
      isRouteBtn: true
    }
  ],
  sideMenu: [
    // group menu #1
    {
      id: 1,
      group: 'User account',
      menus: [
        {
          name: 'Change password',
          linkTo: '/',
          faIconName: 'fa-eye'
        },
        {
          name: 'Student email',
          linkTo: '/Dashboard/statsCard',
          faIconName: 'fa-check-square-o'
        },
        {
          name: 'Logout',
          linkTo: '/Dashboard/earningGraph',
          faIconName: 'fa-area-chart'
        },
      ]
    },
    // group menu #2
    {
      id: 2,
      group: 'Student profile',
      menus: [
        {
          name: 'General info',
          linkTo: '/general',
          faIconName: 'fa-eye'
        },
        {
          name: 'Addtional info',
          linkTo: '/general/breadcrumb',
          faIconName: 'fa-bars'
        },
        {
          name: 'Relations',
          linkTo: '/general/stat',
          faIconName: 'fa-bar-chart'
        },
        {
          name: 'Services',
          linkTo: '/general/basicProgressBars',
          faIconName: 'fa-tasks'
        },
        {
          name: 'Class registration',
          linkTo: '/Dashboard/workProgress',
          faIconName: 'fa-area-chart'
        },
      ]
    },
    // group menu #3
    {
      id: 3,
      group: 'Services',
      menus: [
        {
          name: 'Notifications',
          linkTo: '/Dashboard/notifications',
          faIconName: 'fa-bell'
        },
        {
          name: 'Study progress',
          linkTo: '/Dashboard/workProgress',
          faIconName: 'fa-briefcase'
        },
        {
          name: 'Class registration',
          linkTo: '/Dashboard/workProgress',
          faIconName: 'fa-area-chart'
        },
      ]
    },
    // group menu #4
    {
      id: 4,
      group: 'Polls',
      menus: [
        {
          name: 'Class surveys',
          linkTo: '/simpleTables',
          faIconName: 'fa-eye'
        }
      ]
    }
  ]
};
