const $ = jQuery;

const api = {
    post: <T = any>(action: string, data: T) => {
        const postUrl = new URL(window.ajaxUrl);
        postUrl.searchParams.append('action', action);

        return $.post({
            url: postUrl.toString(),
            data: JSON.stringify(data),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json'
        });
    },
    get: (url: string) => {
        return $.get({ url });
    }
};

export default api;
