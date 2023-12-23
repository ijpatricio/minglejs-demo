import { reactive, toRefs, readonly } from 'vue';

/**
 * This is an example of a Data Store Pattern.
 * This way, we can avoid to use a data store managemnt library like Pinia.
 * Pinia is awesome, but it's not necessary for small projects.
 * Credits: https://dev.to/blacksonic/using-vue-3-composition-api-as-a-state-manager-3m4a
 */

const themes = [
    'nord',
    'light',
    'dark',
];

// 1. Create global state in module scope, shared every
//    time we use this composable
const state = reactive({
    darkMode: false,
    sidebarCollapsed: false,
    // 2. This theme value is kept private to this composable
    theme: 'nord',
});

export default () => {
    // 2. Expose only some of the state
    //    Using toRefs allows us to share individual values
    const { darkMode, sidebarCollapsed } = toRefs(state);

    // 3. Modify our underlying state
    const changeTheme = (newTheme) => {
        if (themes.includes(newTheme)) {
            // Only update if it's a valid theme
            state.theme = newTheme;
        }
    }

    return {
        // 2. Only return some of the state
        darkMode,
        sidebarCollapsed,
        // 2. Only expose a readonly version of state
        theme: readonly(state.theme),
        // 3. We return a method to modify underlying state
        changeTheme,
    }
}
