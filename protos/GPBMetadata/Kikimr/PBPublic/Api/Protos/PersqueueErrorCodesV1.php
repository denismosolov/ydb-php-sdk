<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/persqueue_error_codes_v1.proto

namespace GPBMetadata\Kikimr\PBPublic\Api\Protos;

class PersqueueErrorCodesV1
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
7kikimr/public/api/protos/persqueue_error_codes_v1.protoYdb.PersQueue.ErrorCode*�
	ErrorCode
OK 
INITIALIZING��
OVERLOAD��
BAD_REQUEST��
WRONG_COOKIE��
SOURCEID_DELETED��#
WRITE_ERROR_PARTITION_IS_FULL��
WRITE_ERROR_DISK_IS_FULL��
WRITE_ERROR_BAD_OFFSET��#
CREATE_SESSION_ALREADY_LOCKED��
DELETE_SESSION_NO_SESSION��
READ_ERROR_IN_PROGRESS��
READ_ERROR_NO_SESSION��!
READ_ERROR_TOO_SMALL_OFFSET��
READ_ERROR_TOO_BIG_OFFSET��\'
!SET_OFFSET_ERROR_COMMIT_TO_FUTURE��
TABLET_IS_DROPPED��
READ_NOT_DONE��
UNKNOWN_TOPIC��
ACCESS_DENIED��
CLUSTER_DISABLED��
WRONG_PARTITION_NUMBER��"
PREFERRED_CLUSTER_MISMATCHED��
ERROR��B$
"com.yandex.ydb.persqueue.errorcodebproto3'
        , true);

        static::$is_initialized = true;
    }
}

