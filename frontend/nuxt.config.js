{
    buildModules: [
        // Simple usage
        '@nuxtjs/vuetify',

        // With options
        ['@nuxtjs/vuetify', { /* module options */ }]
    ]
}
export default {
    vuetify: {
      customVariables: ['~/sass/_main.scss'],
      treeShake: true
    },
}