import app from 'flarum/admin/app';

app.initializers.add('peopleinside-admin-css', () => {
    app.translator.add('peopleinside-admin-css', {
        admin: {
            custom_css_label: 'Custom Admin CSS',
            custom_css_help: 'Insert custom CSS rules to style the Flarum administration backend. Use with caution, as invalid CSS may affect the admin interface layout.',
        }
    });
});
