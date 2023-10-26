class LoaderQueue {
    public $loader?: JQuery;

    private loadingKeys: string[];

    constructor() {
        this.loadingKeys = [];
    }
    startLoading(key: string = 'default') {
        if (this.loadingKeys.includes(key)) {
            return;
        }

        this.loadingKeys.push(key);
        this.drawLoader();
    }
    stopLoading(key: string = 'default') {
        const index = this.loadingKeys.indexOf(key);

        if (index < 0) {
            return;
        }

        this.loadingKeys.splice(index, 1);
        this.drawLoader();
    }
    drawLoader() {
        if (!this.$loader) {
            return;
        }

        if (this.loadingKeys.length) {
            this.$loader.show();
        } else {
            this.$loader.hide();
        }
    }
}

export default LoaderQueue;
