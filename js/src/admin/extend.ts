import Extend from 'flarum/common/extenders';

export default [
  new Extend.Admin()
    .setting(() => ({
      setting: 'peopleinside-admin-css.custom_css',
      label: 'Custom Admin CSS',
      help: 'Insert custom CSS rules to style the Flarum administration backend.',
      type: 'textarea',
    }), 10)
];
