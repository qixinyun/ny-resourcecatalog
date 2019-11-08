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
        'QIYEJBXX' => 5,
        'GTGSHXX' => 6,
        'CMQYSBXX' => 7,
        'YPLSQYXX' => 8,
        'JGRYXX' => 9,
        'SXQYHMD' =>10,
        'SPYPTSJBJLGR' => 11,
        'SPYPTSJBJLDW' => 12,
        'HNMPCPXX' => 13,
        'QYYCMLXX' => 14,
        'QYZXXX' => 15,
        'QYDXXX' => 16,
        'CCJCJGXX' => 17,
        'JGJCDXZJL' => 18,
        'YSCRJZJJJZGRDXX' => 19,
        'JDCWFXX' => 20,
        'JSZGXX' => 21,
        'SJYXXS' => 22,
        'JYJGXINXI' => 23,
        'GRRYXXJYJ' => 24,
        'JGRYXXSJYJ' => 25,
        'ESCJDPGJGHZZS' => 26,
        'ZYJNZSXX' => 27,
        'YLBXXX' => 28,
        'YZTQSBXXHMD' => 29,
        'SYBXXX' => 30,
        'SBQYXX' => 31,
        'GZRYXX' => 32,
        'YZTQNMGGZHMD' => 33,
        'SLYSXKZXX' => 34,
        'GRRYXXJTJ' => 35,
        'QYGSZXXX' => 36,
        'AJNSRXX' => 37,
        'ZDSSWFAJXX' => 38,
        'QYDSXZCFXX' => 39,
        'SHZZNJXX' => 40,
        'GRRYXXMZJ' => 41,
        'MBFQYML' => 42,
        'SHTTDJXX' => 43,
        'SFJDJGCYRYZGXX' => 44,
        'SFJDJGDJXX' => 45,
        'GZJGJBXX' => 46,
        'GZYXX' => 47,
        'JCFLFWSXX' => 48,
        'JCFLFWGZZJBXX' => 49,
        'LSSWSXX' => 50,
        'LSZYZGZXX' => 51,
        'JGRYXXSSFJ' => 52,
        'SJQYJSZXRDXX' => 53,
        'ZFCGDLJGXX' => 54,
        'SLGCZBXX' => 55,
        'GJJLTQYRZXX' => 56,
        'DTJXJGRXX' => 57,
        'TJDCDXML' => 58,
        'HNSZLJDW' => 59,
        'XSPJXX' => 60,
        'SXBZXJGXX' => 61,
        'SJJXMXX' => 62,
        'XZXKQYXX' => 63,
        'QSLHXJJTJL' => 64,
        'SPFYSXK' => 65,
        'FDCKFQYZZXX' => 66,
        'JGRYXXSFGJ' => 67,
        'TEST' => 500
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK']
        ),
        IUserGroup::ID['FGW'] => array(self::TYPE['JGJCDXZJL'], self::TYPE['TEST'], self::TYPE['SJJXMXX']),
        IUserGroup::ID['DSJJ'] => array(),
        IUserGroup::ID['SCJGJ'] => array(
            self::TYPE['QIYEJBXX'],
            self::TYPE['GTGSHXX'],
            self::TYPE['CMQYSBXX'],
            self::TYPE['YPLSQYXX'],
            self::TYPE['JGRYXX'],
            self::TYPE['SXQYHMD'],
            self::TYPE['SPYPTSJBJLGR'],
            self::TYPE['SPYPTSJBJLDW'],
            self::TYPE['HNMPCPXX'],
            self::TYPE['QYYCMLXX'],
            self::TYPE['QYZXXX'],
            self::TYPE['QYDXXX'],
            self::TYPE['CCJCJGXX'],
            self::TYPE['FRXX']
        ),
        IUserGroup::ID['ZFW'] => array(),
        IUserGroup::ID['ZZB'] => array(),
        IUserGroup::ID['XCB'] => array(),
        IUserGroup::ID['GAJ'] => array(self::TYPE['YSCRJZJJJZGRDXX'], self::TYPE['JDCWFXX']),
        IUserGroup::ID['JYJ'] => array(
            self::TYPE['JSZGXX'],
            self::TYPE['SJYXXS'],
            self::TYPE['JYJGXINXI'],
            self::TYPE['GRRYXXJYJ'],
            self::TYPE['JGRYXXSJYJ']
        ),
        IUserGroup::ID['SWJ'] => array(self::TYPE['ESCJDPGJGHZZS']),
        IUserGroup::ID['WKJ'] => array(),
        IUserGroup::ID['RSJ'] => array(
            self::TYPE['ZYJNZSXX'],
            self::TYPE['YLBXXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['SYBXXX'],
            self::TYPE['SBQYXX'],
            self::TYPE['GZRYXX'],
            self::TYPE['YZTQNMGGZHMD']
        ),
        IUserGroup::ID['TYJRSWJ'] => array(),
        IUserGroup::ID['YJGLJ'] => array(),
        IUserGroup::ID['ZYGHJ'] => array(),
        IUserGroup::ID['SJJ'] => array(),
        IUserGroup::ID['TYJ'] => array(),
        IUserGroup::ID['ZJJ'] => array(),
        IUserGroup::ID['JTJ'] => array(self::TYPE['SLYSXKZXX'], self::TYPE['GRRYXXJTJ']),
        IUserGroup::ID['SHUIWJ'] => array(self::TYPE['QYGSZXXX'], self::TYPE['AJNSRXX'], self::TYPE['ZDSSWFAJXX'], self::TYPE['QYDSXZCFXX']),
        IUserGroup::ID['WJW'] => array(),
        IUserGroup::ID['STHJJ'] => array(),
        IUserGroup::ID['MZJ'] => array(
            self::TYPE['SHZZNJXX'],
            self::TYPE['GRRYXXMZJ'],
            self::TYPE['MBFQYML'],
            self::TYPE['SHTTDJXX']
        ),
        IUserGroup::ID['RHNYSZH'] => array(),
        IUserGroup::ID['SFJ'] => array(
            self::TYPE['SFJDJGCYRYZGXX'],
            self::TYPE['SFJDJGDJXX'],
            self::TYPE['GZJGJBXX'],
            self::TYPE['GZYXX'],
            self::TYPE['JCFLFWSXX'],
            self::TYPE['JCFLFWGZZJBXX'],
            self::TYPE['LSSWSXX'],
            self::TYPE['LSZYZGZXX'],
            self::TYPE['JGRYXXSSFJ']
        ),
        IUserGroup::ID['GXJ'] => array(self::TYPE['SJQYJSZXRDXX']),
        IUserGroup::ID['CZJ'] => array(self::TYPE['ZFCGDLJGXX']),
        IUserGroup::ID['SLJ'] => array(self::TYPE['SLGCZBXX']),
        IUserGroup::ID['NYNCJ'] => array(self::TYPE['GJJLTQYRZXX']),
        IUserGroup::ID['TJJ'] => array(self::TYPE['DTJXJGRXX'], self::TYPE['TJDCDXML']),
        IUserGroup::ID['KJJ'] => array(self::TYPE['HNSZLJDW']),
        IUserGroup::ID['ZJFY'] => array(self::TYPE['XSPJXX'], self::TYPE['SXBZXJGXX'], self::TYPE['SXBZXRMD']),
        IUserGroup::ID['JCY'] => array(),
        IUserGroup::ID['MZZJSWJ'] => array(),
        IUserGroup::ID['YBJ'] => array(),
        IUserGroup::ID['RFB'] => array(),
        IUserGroup::ID['JRJ'] => array(),
        IUserGroup::ID['FPB'] => array(),
        IUserGroup::ID['XFJ'] => array(),
        IUserGroup::ID['CGJ'] => array(self::TYPE['XZXKQYXX']),
        IUserGroup::ID['LYJ'] => array(self::TYPE['QSLHXJJTJL']),
        IUserGroup::ID['ZYYJ'] => array(),
        IUserGroup::ID['NYHG'] => array(),
        IUserGroup::ID['GSL'] => array(),
        IUserGroup::ID['FGZX'] => array(
            self::TYPE['SPFYSXK'],
            self::TYPE['FDCKFQYZZXX'],
            self::TYPE['JGRYXXSFGJ']
        ),
        IUserGroup::ID['ZYJYZX'] => array(),
        IUserGroup::ID['SZFBGS'] => array(),
        IUserGroup::ID['SLSHWZCBJ'] => array(),
        IUserGroup::ID['NYYBJfJ'] => array(),
        IUserGroup::ID['SZFGJJGLZX'] => array(),
        IUserGroup::ID['QXJ'] => array(),
        IUserGroup::ID['YCZMJ'] => array(),
        IUserGroup::ID['SYZGLJ'] => array(),
        IUserGroup::ID['SWXDGLJ'] => array(),
        IUserGroup::ID['SXXZX'] => array(),
        IUserGroup::ID['DZSXYBGS'] => array(),
        IUserGroup::ID['WLQXYBGS'] => array(),
        IUserGroup::ID['WQQXYBGS'] => array(),
        IUserGroup::ID['FQXXYBGS'] => array(),
        IUserGroup::ID['DQXXYBGS'] => array(),
        IUserGroup::ID['NZXXYBGS'] => array(),
        IUserGroup::ID['XCXXYBGS'] => array(),
        IUserGroup::ID['XXXXYBGS'] => array(),
        IUserGroup::ID['NXXXYBGS'] => array(),
        IUserGroup::ID['ZPXXYBGS'] => array(),
        IUserGroup::ID['XYXXYBGS'] => array(),
        IUserGroup::ID['THXXYBGS'] => array(),
        IUserGroup::ID['TBXXYBGS'] => array(),
        IUserGroup::ID['NYXQXYBGS'] => array(),
        IUserGroup::ID['GXQXYBGS'] => array(),
        IUserGroup::ID['YHGQXYBGS'] => array(),
        IUserGroup::ID['GXGQXYBGS'] => array(),
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}