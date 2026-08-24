import Extend from 'flarum/common/extenders';
import app from 'flarum/admin/app';

export default [
  new Extend.Admin()
    .setting(() => ({
      setting: 'peopleinside-admin-css.custom_css',
      label: app.translator.trans('peopleinside-admin-css.admin.custom_css_label', {}, true),
      help: app.translator.trans('peopleinside-admin-css.admin.custom_css_help', {}, true),
      type: 'textarea',
    }), 10)
];
