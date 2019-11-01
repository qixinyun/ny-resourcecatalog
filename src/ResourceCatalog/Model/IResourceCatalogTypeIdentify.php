<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeIdentify
{
    const TYPE_IDENTIFY = array(
        IResourceCatalog::TYPE['NULL'] => '',
        IResourceCatalog::TYPE['XBXZCF'] => 'XBXZCF',
        IResourceCatalog::TYPE['XBXZXK'] => 'XBXZXK',
        IResourceCatalog::TYPE['SXBZXRMD'] => 'SXBZXRMD',
        IResourceCatalog::TYPE['FRXX'] => 'FRXX',
        IResourceCatalog::TYPE['TEST'] => 'TEST',
    );
}
