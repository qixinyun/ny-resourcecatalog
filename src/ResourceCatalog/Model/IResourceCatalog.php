<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
{
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'SXBZXRMD' => 3,
        'FRXX' => 4,
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK']
        ),
        IUserGroup::ID['FGW'] => array(),
        IUserGroup::ID['DSJJ'] => array(),
        IUserGroup::ID['SCJGJ'] => array(self::TYPE['FRXX']),
        IUserGroup::ID['ZFW'] => array(),
        IUserGroup::ID['ZZB'] => array(),
        IUserGroup::ID['XCB'] => array(),
        IUserGroup::ID['GAJ'] => array(),
        IUserGroup::ID['JYJ'] => array(),
        IUserGroup::ID['SWJ'] => array(),
        IUserGroup::ID['WKJ'] => array(),
        IUserGroup::ID['RSJ'] => array(),
        IUserGroup::ID['TYJRSWJ'] => array(),
        IUserGroup::ID['YJGLJ'] => array(),
        IUserGroup::ID['ZYGHJ'] => array(),
        IUserGroup::ID['SJJ'] => array(),
        IUserGroup::ID['TYJ'] => array(),
        IUserGroup::ID['ZJJ'] => array(),
        IUserGroup::ID['JTJ'] => array(),
        IUserGroup::ID['SHUIWJ'] => array(),
        IUserGroup::ID['WJW'] => array(),
        IUserGroup::ID['STHJJ'] => array(),
        IUserGroup::ID['MZJ'] => array(),
        IUserGroup::ID['RHNYSZH'] => array(),
        IUserGroup::ID['SFJ'] => array(),
        IUserGroup::ID['GXJ'] => array(),
        IUserGroup::ID['CZJ'] => array(),
        IUserGroup::ID['SLJ'] => array(),
        IUserGroup::ID['NYNCJ'] => array(),
        IUserGroup::ID['TJJ'] => array(),
        IUserGroup::ID['KJJ'] => array(),
        IUserGroup::ID['ZJFY'] => array(self::TYPE['SXBZXRMD']),
        IUserGroup::ID['JCY'] => array(),
        IUserGroup::ID['MZJ'] => array(),
        IUserGroup::ID['YBJ'] => array(),
        IUserGroup::ID['RFB'] => array(),
        IUserGroup::ID['JRJ'] => array(),
        IUserGroup::ID['FPB'] => array(),
        IUserGroup::ID['XFJ'] => array(),
        IUserGroup::ID['CGJ'] => array(),
        IUserGroup::ID['LYJ'] => array(),
        IUserGroup::ID['ZYYJ'] => array(),
        IUserGroup::ID['NYHG'] => array(),
        IUserGroup::ID['GSL'] => array(),
        IUserGroup::ID['FGZX'] => array(),
        IUserGroup::ID['ZYJYZX'] => array(),
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}