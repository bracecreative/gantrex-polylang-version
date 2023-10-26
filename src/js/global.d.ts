export {};

interface LocationSelectorProps {
    containerClassName: string;
    itemClassName: string;
    selectClassName: string;
    loaderClassName: string;
}

interface FindUsCardProps {
    containerClassName: string;
    placeholderClassName: string;
}

interface DocumentDirectoryProps {
    rootClassName: string;
    searchFormClassName: string;
    filterClassName: string;
    downloadClassName: string;
    loaderClassName: string;
    pagerClassName: string;
    scrollOffsetClassName: string;
    clearSearchClassName: string;
}

interface DocumentPickerProps {
    rootClassName: string;
    languageClassName: string;
    selectClassName: string;
    documentLoaderClassName: string;
    languageLoaderClassName: string;
}

declare global {
    interface Window {
        ajaxUrl: string;
        popupCloseClass: string;
        locationSelectorProps: LocationSelectorProps;
        findUsCardProps: FindUsCardProps;
        documentDirectoryProps: DocumentDirectoryProps;
        documentPickerProps: DocumentPickerProps;
        dataCaptureResultToken?: string;
    }
}
