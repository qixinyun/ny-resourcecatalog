<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeDoublePublicity
{
    const TYPE_DOUBLE_PUBLICITY = array(
        IResourceCatalog::TYPE['NULL'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['XBXZCF'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['SANCTION'],
        IResourceCatalog::TYPE['XBXZXK'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['JGJCDXZJL'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SJJXMXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QIYEJBXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['GTGSHXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['CMQYSBXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['YPLSQYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['JGRYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SXQYHMD'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['SANCTION'],
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['HNMPCPXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['QYYCMLXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QYZXXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QYDXXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['CCJCJGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['FRXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['JDCWFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JSZGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SJYXXS'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JYJGXINXI'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['GRRYXXJYJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['ZYJNZSXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['YLBXXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SYBXXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SBQYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['GZRYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SLYSXKZXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['GRRYXXJTJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QYGSZXXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['AJNSRXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['ZDSSWFAJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QYDSXZCFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['SANCTION'],
        IResourceCatalog::TYPE['SHZZNJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['GRRYXXMZJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['MBFQYML'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SHTTDJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['SFJDJGDJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['GZJGJBXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['GZYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JCFLFWSXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['LSSWSXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['LSZYZGZXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SJQYJSZXRDXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['SLGCZBXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['GJJLTQYRZXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['DTJXJGRXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['TJDCDXML'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['HNSZLJDW'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['XSPJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SXBZXJGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SXBZXRMD'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['XZXKQYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['QSLHXJJTJL'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SPFYSXK'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['FDCKFQYZZXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JGRYXXSFGJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['XYTXHMD'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SYDWJBXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],

        IResourceCatalog::TYPE['XZQZ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['XZZS'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['XZCJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['XZQR'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['XZJF'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JDJC'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['XZJL'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QTXZZF'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['HEIMDXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['HONGMDXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['HYFJFLJG'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QYHYSJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['TEST'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['DWYSZCXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['TQMYQYZK'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['ZFCGHT'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['GGZYJYHT'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['GQCGHT'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['GCJSHT'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QTHT'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['DWYSJFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['DWYSQFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['DWYSPJFYBJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JMYSZCXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JMYSQFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JMYSQFBJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['DWRQZCXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['DWRQJFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['DWRQQFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['DWRQQJFYBJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JMRQZCXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JMRQJFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JMRQQFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JMRQQJFYBJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['DWCNZCXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['DCNJFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['DWCNQFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['DWCNQJFYBJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JMCNZCXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JMYNJFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JMTNQFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JMTNQJFYBJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],

        //@position
    );
}
