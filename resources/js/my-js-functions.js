export function localeDate(date) {
    if (date) {
        return (new Date(date)).toLocaleDateString()
    };
}