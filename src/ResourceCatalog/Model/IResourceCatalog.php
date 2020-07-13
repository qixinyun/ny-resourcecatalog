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
        'XYTXHMD' => 68,
        'SYDWJBXX'=>69,

        'XZQZXX' => 70,
        'XZZSXX' => 71,
        'XZCJXX' => 72,
        'XZQRXX' => 73,
        'XZJFXX' => 74,
        'JDJCXX' => 75,
        'XZJLXX' => 76,
        'QTXZZFXX' => 77,
        'HEIMDXX' => 78,
        'HONGMDXX' => 79,
        'HYFJFLJG' => 80,
        'TEST' => 500
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK'],
            self::TYPE['XYTXHMD'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZZSXX'],
            self::TYPE['XZCJXX'],
            self::TYPE['XZQRXX'],
            self::TYPE['XZJFXX'],
            self::TYPE['JDJCXX'],
            self::TYPE['XZJLXX'],
            self::TYPE['QTXZZFXX'],
        ),
        IUserGroup::ID['SXYB'] => array(
            self::TYPE['JGJCDXZJL'], 
            self::TYPE['TEST'], 
            self::TYPE['SJJXMXX'], 
            self::TYPE['SYDWJBXX'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
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
            self::TYPE['FRXX'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['ZFW'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG']
        ),
        IUserGroup::ID['ZZB'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['XCB'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['GAJ'] => array(
            self::TYPE['YSCRJZJJJZGRDXX'],
            self::TYPE['JDCWFXX'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['JYJ'] => array(
            self::TYPE['JSZGXX'],
            self::TYPE['SJYXXS'],
            self::TYPE['JYJGXINXI'],
            self::TYPE['GRRYXXJYJ'],
            self::TYPE['JGRYXXSJYJ'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['SWJ'] => array(
            self::TYPE['ESCJDPGJGHZZS'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['WKJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['RSJ'] => array(
            self::TYPE['ZYJNZSXX'],
            self::TYPE['YLBXXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['SYBXXX'],
            self::TYPE['SBQYXX'],
            self::TYPE['GZRYXX'],
            self::TYPE['YZTQNMGGZHMD'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['TYJRSWJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['YJGLJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['ZYGHJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['SJJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG']
        ),
        IUserGroup::ID['TYJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['ZJJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['JTJ'] => array(
            self::TYPE['SLYSXKZXX'], 
            self::TYPE['GRRYXXJTJ'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['SHUIWJ'] => array(
            self::TYPE['QYGSZXXX'], 
            self::TYPE['AJNSRXX'], 
            self::TYPE['ZDSSWFAJXX'], 
            self::TYPE['QYDSXZCFXX'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['WJW'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['STHJJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['MZJ'] => array(
            self::TYPE['SHZZNJXX'],
            self::TYPE['GRRYXXMZJ'],
            self::TYPE['MBFQYML'],
            self::TYPE['SHTTDJXX'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['RHNYSZH'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['SFJ'] => array(
            self::TYPE['SFJDJGCYRYZGXX'],
            self::TYPE['SFJDJGDJXX'],
            self::TYPE['GZJGJBXX'],
            self::TYPE['GZYXX'],
            self::TYPE['JCFLFWSXX'],
            self::TYPE['JCFLFWGZZJBXX'],
            self::TYPE['LSSWSXX'],
            self::TYPE['LSZYZGZXX'],
            self::TYPE['JGRYXXSSFJ'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['GXJ'] => array(
            self::TYPE['SJQYJSZXRDXX'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['CZJ'] => array(
            self::TYPE['ZFCGDLJGXX'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['SLJ'] => array(
            self::TYPE['SLGCZBXX'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['NYNCJ'] => array(
            self::TYPE['GJJLTQYRZXX'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['TJJ'] => array(
            self::TYPE['DTJXJGRXX'], 
            self::TYPE['TJDCDXML'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['KJJ'] => array(
            self::TYPE['HNSZLJDW'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['ZJFY'] => array(
            self::TYPE['XSPJXX'], 
            self::TYPE['SXBZXJGXX'], 
            self::TYPE['SXBZXRMD'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['JCY'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['MZZJSWJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['YBJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['RFB'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['JRJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['FPB'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['XFJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['CGJ'] => array(
            self::TYPE['XZXKQYXX'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['LYJ'] => array(
            self::TYPE['QSLHXJJTJL'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['ZYYJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['NYHG'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['GSL'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['FGZX'] => array(
            self::TYPE['SPFYSXK'],
            self::TYPE['FDCKFQYZZXX'],
            self::TYPE['JGRYXXSFGJ'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['ZYJYZX'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['SZFBGS'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['SLSHWZCBJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['NYYBJfJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['SZFGJJGLZX'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['QXJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['YCZMJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['SYZGLJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['SWXDGLJ'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['SXXZX'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['FGW'] => array(
            self::TYPE['JGJCDXZJL'],
            self::TYPE['SJJXMXX'],
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['SWWXB'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['SXFZD'] => array(
            self::TYPE['HEIMDXX'],
            self::TYPE['HONGMDXX'],
            self::TYPE['HYFJFLJG'],
        ),
        IUserGroup::ID['DZSXYBGS'] => array(),
        IUserGroup::ID['WLQXYBGS'] => array(),
        IUserGroup::ID['WQQXYBGS'] => array(),
        IUserGroup::ID['FQXXYBGS'] => array(),
        IUserGroup::ID['DQXXYBGS'] => array(),
        IUserGroup::ID['NZXXYBGS'] => array(),
        IUserGroup::ID['NZXFL'] => array(),
        IUserGroup::ID['NZXCL'] => array(),
        IUserGroup::ID['NZXFY'] => array(),
        IUserGroup::ID['NZXGAJ'] => array(),
        IUserGroup::ID['NZXSFJ'] => array(),
        IUserGroup::ID['NZXCZJ'] => array(),
        IUserGroup::ID['NZXKJJ'] => array(),
        IUserGroup::ID['NZXRSJ'] => array(),
        IUserGroup::ID['NZXSJJ'] => array(),
        IUserGroup::ID['NZXMZJ'] => array(),
        IUserGroup::ID['NZXWJW'] => array(),
        IUserGroup::ID['NZXZRZYJ'] => array(),
        IUserGroup::ID['NZXFPB'] => array(),
        IUserGroup::ID['NZXWGLJ'] => array(),
        IUserGroup::ID['NZXSWJ'] => array(),
        IUserGroup::ID['NZXSCJGJGS'] => array(),
        IUserGroup::ID['NZXSCJGJZJ'] => array(),
        IUserGroup::ID['NZXSCJGJYJ'] => array(),
        IUserGroup::ID['NZXYLBZJ'] => array(),
        IUserGroup::ID['NZXYJGLJ'] => array(),
        IUserGroup::ID['NZXCGJ'] => array(),
        IUserGroup::ID['NZXJTJ'] => array(),
        IUserGroup::ID['NZXNYNCJ'] => array(),
        IUserGroup::ID['NZXLYJ'] => array(),
        IUserGroup::ID['NZXSLJ'] => array(),
        IUserGroup::ID['NZXZJJ'] => array(),
        IUserGroup::ID['NZXHBJ'] => array(),
        IUserGroup::ID['NZXFCGLJ'] => array(),
        IUserGroup::ID['NZXSWUJ'] => array(),
        IUserGroup::ID['NZXYCGS'] => array(),
        IUserGroup::ID['RHNZXZH'] => array(),
        IUserGroup::ID['NZXGXJ'] => array(),
        IUserGroup::ID['NZXJTOJ'] => array(),
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