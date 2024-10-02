const basePath = window.location.hostname

const getUrl = path => {
    
    let targetPath = (`myfw/backend/index.php${path ? '/' + path : ''}`).replaceAll('//', '/')

    return `http://${basePath}/${targetPath}`

} 



export { getUrl };