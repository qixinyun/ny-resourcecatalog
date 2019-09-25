<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogIsConfirm
{
    const TYPE_RESOURECATALOG_CONFIRM = array(
        IResourceCatalog::TYPE['NULL'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['XBXZCF'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['XBXZXK'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['SXBZXRMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['FRXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
    );
}
