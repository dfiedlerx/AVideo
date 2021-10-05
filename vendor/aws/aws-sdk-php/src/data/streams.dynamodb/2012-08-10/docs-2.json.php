<?php
// This file was auto-generated from sdk-root/src/data/streams.dynamodb/2012-08-10/docs-2.json
return [ 'version' => '2.0', 'service' => '<fullname>Amazon DynamoDB</fullname> <p>Amazon DynamoDB Streams provides API actions for accessing streams and processing stream records. To learn more about application development with Streams, see <a href="https://docs.aws.amazon.com/amazondynamodb/latest/developerguide/Streams.html">Capturing Table Activity with DynamoDB Streams</a> in the Amazon DynamoDB Developer Guide.</p>', 'operations' => [ 'DescribeStream' => '<p>Returns information about a stream, including the current status of the stream, its Amazon Resource Name (ARN), the composition of its shards, and its corresponding DynamoDB table.</p> <note> <p>You can call <code>DescribeStream</code> at a maximum rate of 10 times per second.</p> </note> <p>Each shard in the stream has a <code>SequenceNumberRange</code> associated with it. If the <code>SequenceNumberRange</code> has a <code>StartingSequenceNumber</code> but no <code>EndingSequenceNumber</code>, then the shard is still open (able to receive more stream records). If both <code>StartingSequenceNumber</code> and <code>EndingSequenceNumber</code> are present, then that shard is closed and can no longer receive more data.</p>', 'GetRecords' => '<p>Retrieves the stream records from a given shard.</p> <p>Specify a shard iterator using the <code>ShardIterator</code> parameter. The shard iterator specifies the position in the shard from which you want to start reading stream records sequentially. If there are no stream records available in the portion of the shard that the iterator points to, <code>GetRecords</code> returns an empty list. Note that it might take multiple calls to get to a portion of the shard that contains stream records.</p> <note> <p> <code>GetRecords</code> can retrieve a maximum of 1 MB of data or 1000 stream records, whichever comes first.</p> </note>', 'GetShardIterator' => '<p>Returns a shard iterator. A shard iterator provides information about how to retrieve the stream records from within a shard. Use the shard iterator in a subsequent <code>GetRecords</code> request to read the stream records from the shard.</p> <note> <p>A shard iterator expires 15 minutes after it is returned to the requester.</p> </note>', 'ListStreams' => '<p>Returns an array of stream ARNs associated with the current account and endpoint. If the <code>TableName</code> parameter is present, then <code>ListStreams</code> will return only the streams ARNs for that table.</p> <note> <p>You can call <code>ListStreams</code> at a maximum rate of 5 times per second.</p> </note>', ], 'shapes' => [ 'AttributeMap' => [ 'base' => NULL, 'refs' => [ 'StreamRecord$Keys' => '<p>The primary key attribute(s) for the DynamoDB item that was modified.</p>', 'StreamRecord$NewImage' => '<p>The item in the DynamoDB table as it appeared after it was modified.</p>', 'StreamRecord$OldImage' => '<p>The item in the DynamoDB table as it appeared before it was modified.</p>', ], ], 'AttributeName' => [ 'base' => NULL, 'refs' => [ 'AttributeMap$key' => NULL, 'MapAttributeValue$key' => NULL, ], ], 'AttributeValue' => [ 'base' => '<p>Represents the data for an attribute.</p> <p>Each attribute value is described as a name-value pair. The name is the data type, and the value is the data itself.</p> <p>For more information, see <a href="https://docs.aws.amazon.com/amazondynamodb/latest/developerguide/HowItWorks.NamingRulesDataTypes.html#HowItWorks.DataTypes">Data Types</a> in the <i>Amazon DynamoDB Developer Guide</i>.</p>', 'refs' => [ 'AttributeMap$value' => NULL, 'ListAttributeValue$member' => NULL, 'MapAttributeValue$value' => NULL, ], ], 'BinaryAttributeValue' => [ 'base' => NULL, 'refs' => [ 'AttributeValue$B' => '<p>An attribute of type Binary. For example:</p> <p> <code>"B": "dGhpcyB0ZXh0IGlzIGJhc2U2NC1lbmNvZGVk"</code> </p>', 'BinarySetAttributeValue$member' => NULL, ], ], 'BinarySetAttributeValue' => [ 'base' => NULL, 'refs' => [ 'AttributeValue$BS' => '<p>An attribute of type Binary Set. For example:</p> <p> <code>"BS": ["U3Vubnk=", "UmFpbnk=", "U25vd3k="]</code> </p>', ], ], 'BooleanAttributeValue' => [ 'base' => NULL, 'refs' => [ 'AttributeValue$BOOL' => '<p>An attribute of type Boolean. For example:</p> <p> <code>"BOOL": true</code> </p>', ], ], 'Date' => [ 'base' => NULL, 'refs' => [ 'StreamDescription$CreationRequestDateTime' => '<p>The date and time when the request to create this stream was issued.</p>', 'StreamRecord$ApproximateCreationDateTime' => '<p>The approximate date and time when the stream record was created, in <a href="http://www.epochconverter.com/">UNIX epoch time</a> format.</p>', ], ], 'DescribeStreamInput' => [ 'base' => '<p>Represents the input of a <code>DescribeStream</code> operation.</p>', 'refs' => [], ], 'DescribeStreamOutput' => [ 'base' => '<p>Represents the output of a <code>DescribeStream</code> operation.</p>', 'refs' => [], ], 'ErrorMessage' => [ 'base' => NULL, 'refs' => [ 'ExpiredIteratorException$message' => '<p>The provided iterator exceeds the maximum age allowed.</p>', 'InternalServerError$message' => '<p>The server encountered an internal error trying to fulfill the request.</p>', 'LimitExceededException$message' => '<p>Too many operations for a given subscriber.</p>', 'ResourceNotFoundException$message' => '<p>The resource which is being requested does not exist.</p>', 'TrimmedDataAccessException$message' => '<p>"The data you are trying to access has been trimmed.</p>', ], ], 'ExpiredIteratorException' => [ 'base' => '<p>The shard iterator has expired and can no longer be used to retrieve stream records. A shard iterator expires 15 minutes after it is retrieved using the <code>GetShardIterator</code> action.</p>', 'refs' => [], ], 'GetRecordsInput' => [ 'base' => '<p>Represents the input of a <code>GetRecords</code> operation.</p>', 'refs' => [], ], 'GetRecordsOutput' => [ 'base' => '<p>Represents the output of a <code>GetRecords</code> operation.</p>', 'refs' => [], ], 'GetShardIteratorInput' => [ 'base' => '<p>Represents the input of a <code>GetShardIterator</code> operation.</p>', 'refs' => [], ], 'GetShardIteratorOutput' => [ 'base' => '<p>Represents the output of a <code>GetShardIterator</code> operation.</p>', 'refs' => [], ], 'Identity' => [ 'base' => '<p>Contains details about the type of identity that made the request.</p>', 'refs' => [ 'Record$userIdentity' => '<p>Items that are deleted by the Time to Live process after expiration have the following fields: </p> <ul> <li> <p>Records[].userIdentity.type</p> <p>"Service"</p> </li> <li> <p>Records[].userIdentity.principalId</p> <p>"dynamodb.amazonaws.com"</p> </li> </ul>', ], ], 'InternalServerError' => [ 'base' => '<p>An error occurred on the server side.</p>', 'refs' => [], ], 'KeySchema' => [ 'base' => NULL, 'refs' => [ 'StreamDescription$KeySchema' => '<p>The key attribute(s) of the stream\'s DynamoDB table.</p>', ], ], 'KeySchemaAttributeName' => [ 'base' => NULL, 'refs' => [ 'KeySchemaElement$AttributeName' => '<p>The name of a key attribute.</p>', ], ], 'KeySchemaElement' => [ 'base' => '<p>Represents <i>a single element</i> of a key schema. A key schema specifies the attributes that make up the primary key of a table, or the key attributes of an index.</p> <p>A <code>KeySchemaElement</code> represents exactly one attribute of the primary key. For example, a simple primary key would be represented by one <code>KeySchemaElement</code> (for the partition key). A composite primary key would require one <code>KeySchemaElement</code> for the partition key, and another <code>KeySchemaElement</code> for the sort key.</p> <p>A <code>KeySchemaElement</code> must be a scalar, top-level attribute (not a nested attribute). The data type must be one of String, Number, or Binary. The attribute cannot be nested within a List or a Map.</p>', 'refs' => [ 'KeySchema$member' => NULL, ], ], 'KeyType' => [ 'base' => NULL, 'refs' => [ 'KeySchemaElement$KeyType' => '<p>The role that this key attribute will assume:</p> <ul> <li> <p> <code>HASH</code> - partition key</p> </li> <li> <p> <code>RANGE</code> - sort key</p> </li> </ul> <note> <p>The partition key of an item is also known as its <i>hash attribute</i>. The term "hash attribute" derives from DynamoDB\'s usage of an internal hash function to evenly distribute data items across partitions, based on their partition key values.</p> <p>The sort key of an item is also known as its <i>range attribute</i>. The term "range attribute" derives from the way DynamoDB stores items with the same partition key physically close together, in sorted order by the sort key value.</p> </note>', ], ], 'LimitExceededException' => [ 'base' => '<p>There is no limit to the number of daily on-demand backups that can be taken.</p> <p>Up to 50 simultaneous table operations are allowed per account. These operations include <code>CreateTable</code>, <code>UpdateTable</code>, <code>DeleteTable</code>,<code>UpdateTimeToLive</code>, <code>RestoreTableFromBackup</code>, and <code>RestoreTableToPointInTime</code>.</p> <p>The only exception is when you are creating a table with one or more secondary indexes. You can have up to 25 such requests running at a time; however, if the table or index specifications are complex, DynamoDB might temporarily reduce the number of concurrent operations.</p> <p>There is a soft account quota of 256 tables.</p>', 'refs' => [], ], 'ListAttributeValue' => [ 'base' => NULL, 'refs' => [ 'AttributeValue$L' => '<p>An attribute of type List. For example:</p> <p> <code>"L": [ {"S": "Cookies"} , {"S": "Coffee"}, {"N", "3.14159"}]</code> </p>', ], ], 'ListStreamsInput' => [ 'base' => '<p>Represents the input of a <code>ListStreams</code> operation.</p>', 'refs' => [], ], 'ListStreamsOutput' => [ 'base' => '<p>Represents the output of a <code>ListStreams</code> operation.</p>', 'refs' => [], ], 'MapAttributeValue' => [ 'base' => NULL, 'refs' => [ 'AttributeValue$M' => '<p>An attribute of type Map. For example:</p> <p> <code>"M": {"Name": {"S": "Joe"}, "Age": {"N": "35"}}</code> </p>', ], ], 'NullAttributeValue' => [ 'base' => NULL, 'refs' => [ 'AttributeValue$NULL' => '<p>An attribute of type Null. For example:</p> <p> <code>"NULL": true</code> </p>', ], ], 'NumberAttributeValue' => [ 'base' => NULL, 'refs' => [ 'AttributeValue$N' => '<p>An attribute of type Number. For example:</p> <p> <code>"N": "123.45"</code> </p> <p>Numbers are sent across the network to DynamoDB as strings, to maximize compatibility across languages and libraries. However, DynamoDB treats them as number type attributes for mathematical operations.</p>', 'NumberSetAttributeValue$member' => NULL, ], ], 'NumberSetAttributeValue' => [ 'base' => NULL, 'refs' => [ 'AttributeValue$NS' => '<p>An attribute of type Number Set. For example:</p> <p> <code>"NS": ["42.2", "-19", "7.5", "3.14"]</code> </p> <p>Numbers are sent across the network to DynamoDB as strings, to maximize compatibility across languages and libraries. However, DynamoDB treats them as number type attributes for mathematical operations.</p>', ], ], 'OperationType' => [ 'base' => NULL, 'refs' => [ 'Record$eventName' => '<p>The type of data modification that was performed on the DynamoDB table:</p> <ul> <li> <p> <code>INSERT</code> - a new item was added to the table.</p> </li> <li> <p> <code>MODIFY</code> - one or more of an existing item\'s attributes were modified.</p> </li> <li> <p> <code>REMOVE</code> - the item was deleted from the table</p> </li> </ul>', ], ], 'PositiveIntegerObject' => [ 'base' => NULL, 'refs' => [ 'DescribeStreamInput$Limit' => '<p>The maximum number of shard objects to return. The upper limit is 100.</p>', 'GetRecordsInput$Limit' => '<p>The maximum number of records to return from the shard. The upper limit is 1000.</p>', 'ListStreamsInput$Limit' => '<p>The maximum number of streams to return. The upper limit is 100.</p>', ], ], 'PositiveLongObject' => [ 'base' => NULL, 'refs' => [ 'StreamRecord$SizeBytes' => '<p>The size of the stream record, in bytes.</p>', ], ], 'Record' => [ 'base' => '<p>A description of a unique event within a stream.</p>', 'refs' => [ 'RecordList$member' => NULL, ], ], 'RecordList' => [ 'base' => NULL, 'refs' => [ 'GetRecordsOutput$Records' => '<p>The stream records from the shard, which were retrieved using the shard iterator.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>The operation tried to access a nonexistent table or index. The resource might not be specified correctly, or its status might not be <code>ACTIVE</code>.</p>', 'refs' => [], ], 'SequenceNumber' => [ 'base' => NULL, 'refs' => [ 'GetShardIteratorInput$SequenceNumber' => '<p>The sequence number of a stream record in the shard from which to start reading.</p>', 'SequenceNumberRange$StartingSequenceNumber' => '<p>The first sequence number for the stream records contained within a shard. String contains numeric characters only.</p>', 'SequenceNumberRange$EndingSequenceNumber' => '<p>The last sequence number for the stream records contained within a shard. String contains numeric characters only.</p>', 'StreamRecord$SequenceNumber' => '<p>The sequence number of the stream record.</p>', ], ], 'SequenceNumberRange' => [ 'base' => '<p>The beginning and ending sequence numbers for the stream records contained within a shard.</p>', 'refs' => [ 'Shard$SequenceNumberRange' => '<p>The range of possible sequence numbers for the shard.</p>', ], ], 'Shard' => [ 'base' => '<p>A uniquely identified group of stream records within a stream.</p>', 'refs' => [ 'ShardDescriptionList$member' => NULL, ], ], 'ShardDescriptionList' => [ 'base' => NULL, 'refs' => [ 'StreamDescription$Shards' => '<p>The shards that comprise the stream.</p>', ], ], 'ShardId' => [ 'base' => NULL, 'refs' => [ 'DescribeStreamInput$ExclusiveStartShardId' => '<p>The shard ID of the first item that this operation will evaluate. Use the value that was returned for <code>LastEvaluatedShardId</code> in the previous operation. </p>', 'GetShardIteratorInput$ShardId' => '<p>The identifier of the shard. The iterator will be returned for this shard ID.</p>', 'Shard$ShardId' => '<p>The system-generated identifier for this shard.</p>', 'Shard$ParentShardId' => '<p>The shard ID of the current shard\'s parent.</p>', 'StreamDescription$LastEvaluatedShardId' => '<p>The shard ID of the item where the operation stopped, inclusive of the previous result set. Use this value to start a new operation, excluding this value in the new request.</p> <p>If <code>LastEvaluatedShardId</code> is empty, then the "last page" of results has been processed and there is currently no more data to be retrieved.</p> <p>If <code>LastEvaluatedShardId</code> is not empty, it does not necessarily mean that there is more data in the result set. The only way to know when you have reached the end of the result set is when <code>LastEvaluatedShardId</code> is empty.</p>', ], ], 'ShardIterator' => [ 'base' => NULL, 'refs' => [ 'GetRecordsInput$ShardIterator' => '<p>A shard iterator that was retrieved from a previous GetShardIterator operation. This iterator can be used to access the stream records in this shard.</p>', 'GetRecordsOutput$NextShardIterator' => '<p>The next position in the shard from which to start sequentially reading stream records. If set to <code>null</code>, the shard has been closed and the requested iterator will not return any more data.</p>', 'GetShardIteratorOutput$ShardIterator' => '<p>The position in the shard from which to start reading stream records sequentially. A shard iterator specifies this position using the sequence number of a stream record in a shard.</p>', ], ], 'ShardIteratorType' => [ 'base' => NULL, 'refs' => [ 'GetShardIteratorInput$ShardIteratorType' => '<p>Determines how the shard iterator is used to start reading stream records from the shard:</p> <ul> <li> <p> <code>AT_SEQUENCE_NUMBER</code> - Start reading exactly from the position denoted by a specific sequence number.</p> </li> <li> <p> <code>AFTER_SEQUENCE_NUMBER</code> - Start reading right after the position denoted by a specific sequence number.</p> </li> <li> <p> <code>TRIM_HORIZON</code> - Start reading at the last (untrimmed) stream record, which is the oldest record in the shard. In DynamoDB Streams, there is a 24 hour limit on data retention. Stream records whose age exceeds this limit are subject to removal (trimming) from the stream.</p> </li> <li> <p> <code>LATEST</code> - Start reading just after the most recent stream record in the shard, so that you always read the most recent data in the shard.</p> </li> </ul>', ], ], 'Stream' => [ 'base' => '<p>Represents all of the data describing a particular stream.</p>', 'refs' => [ 'StreamList$member' => NULL, ], ], 'StreamArn' => [ 'base' => NULL, 'refs' => [ 'DescribeStreamInput$StreamArn' => '<p>The Amazon Resource Name (ARN) for the stream.</p>', 'GetShardIteratorInput$StreamArn' => '<p>The Amazon Resource Name (ARN) for the stream.</p>', 'ListStreamsInput$ExclusiveStartStreamArn' => '<p>The ARN (Amazon Resource Name) of the first item that this operation will evaluate. Use the value that was returned for <code>LastEvaluatedStreamArn</code> in the previous operation. </p>', 'ListStreamsOutput$LastEvaluatedStreamArn' => '<p>The stream ARN of the item where the operation stopped, inclusive of the previous result set. Use this value to start a new operation, excluding this value in the new request.</p> <p>If <code>LastEvaluatedStreamArn</code> is empty, then the "last page" of results has been processed and there is no more data to be retrieved.</p> <p>If <code>LastEvaluatedStreamArn</code> is not empty, it does not necessarily mean that there is more data in the result set. The only way to know when you have reached the end of the result set is when <code>LastEvaluatedStreamArn</code> is empty.</p>', 'Stream$StreamArn' => '<p>The Amazon Resource Name (ARN) for the stream.</p>', 'StreamDescription$StreamArn' => '<p>The Amazon Resource Name (ARN) for the stream.</p>', ], ], 'StreamDescription' => [ 'base' => '<p>Represents all of the data describing a particular stream.</p>', 'refs' => [ 'DescribeStreamOutput$StreamDescription' => '<p>A complete description of the stream, including its creation date and time, the DynamoDB table associated with the stream, the shard IDs within the stream, and the beginning and ending sequence numbers of stream records within the shards.</p>', ], ], 'StreamList' => [ 'base' => NULL, 'refs' => [ 'ListStreamsOutput$Streams' => '<p>A list of stream descriptors associated with the current account and endpoint.</p>', ], ], 'StreamRecord' => [ 'base' => '<p>A description of a single data modification that was performed on an item in a DynamoDB table.</p>', 'refs' => [ 'Record$dynamodb' => '<p>The main body of the stream record, containing all of the DynamoDB-specific fields.</p>', ], ], 'StreamStatus' => [ 'base' => NULL, 'refs' => [ 'StreamDescription$StreamStatus' => '<p>Indicates the current status of the stream:</p> <ul> <li> <p> <code>ENABLING</code> - Streams is currently being enabled on the DynamoDB table.</p> </li> <li> <p> <code>ENABLED</code> - the stream is enabled.</p> </li> <li> <p> <code>DISABLING</code> - Streams is currently being disabled on the DynamoDB table.</p> </li> <li> <p> <code>DISABLED</code> - the stream is disabled.</p> </li> </ul>', ], ], 'StreamViewType' => [ 'base' => NULL, 'refs' => [ 'StreamDescription$StreamViewType' => '<p>Indicates the format of the records within this stream:</p> <ul> <li> <p> <code>KEYS_ONLY</code> - only the key attributes of items that were modified in the DynamoDB table.</p> </li> <li> <p> <code>NEW_IMAGE</code> - entire items from the table, as they appeared after they were modified.</p> </li> <li> <p> <code>OLD_IMAGE</code> - entire items from the table, as they appeared before they were modified.</p> </li> <li> <p> <code>NEW_AND_OLD_IMAGES</code> - both the new and the old images of the items from the table.</p> </li> </ul>', 'StreamRecord$StreamViewType' => '<p>The type of data from the modified DynamoDB item that was captured in this stream record:</p> <ul> <li> <p> <code>KEYS_ONLY</code> - only the key attributes of the modified item.</p> </li> <li> <p> <code>NEW_IMAGE</code> - the entire item, as it appeared after it was modified.</p> </li> <li> <p> <code>OLD_IMAGE</code> - the entire item, as it appeared before it was modified.</p> </li> <li> <p> <code>NEW_AND_OLD_IMAGES</code> - both the new and the old item images of the item.</p> </li> </ul>', ], ], 'String' => [ 'base' => NULL, 'refs' => [ 'Identity$PrincipalId' => '<p>A unique identifier for the entity that made the call. For Time To Live, the principalId is "dynamodb.amazonaws.com".</p>', 'Identity$Type' => '<p>The type of the identity. For Time To Live, the type is "Service".</p>', 'Record$eventID' => '<p>A globally unique identifier for the event that was recorded in this stream record.</p>', 'Record$eventVersion' => '<p>The version number of the stream record format. This number is updated whenever the structure of <code>Record</code> is modified.</p> <p>Client applications must not assume that <code>eventVersion</code> will remain at a particular value, as this number is subject to change at any time. In general, <code>eventVersion</code> will only increase as the low-level DynamoDB Streams API evolves.</p>', 'Record$eventSource' => '<p>The AWS service from which the stream record originated. For DynamoDB Streams, this is <code>aws:dynamodb</code>.</p>', 'Record$awsRegion' => '<p>The region in which the <code>GetRecords</code> request was received.</p>', 'Stream$StreamLabel' => '<p>A timestamp, in ISO 8601 format, for this stream.</p> <p>Note that <code>LatestStreamLabel</code> is not a unique identifier for the stream, because it is possible that a stream from another table might have the same timestamp. However, the combination of the following three elements is guaranteed to be unique:</p> <ul> <li> <p>the AWS customer ID.</p> </li> <li> <p>the table name</p> </li> <li> <p>the <code>StreamLabel</code> </p> </li> </ul>', 'StreamDescription$StreamLabel' => '<p>A timestamp, in ISO 8601 format, for this stream.</p> <p>Note that <code>LatestStreamLabel</code> is not a unique identifier for the stream, because it is possible that a stream from another table might have the same timestamp. However, the combination of the following three elements is guaranteed to be unique:</p> <ul> <li> <p>the AWS customer ID.</p> </li> <li> <p>the table name</p> </li> <li> <p>the <code>StreamLabel</code> </p> </li> </ul>', ], ], 'StringAttributeValue' => [ 'base' => NULL, 'refs' => [ 'AttributeValue$S' => '<p>An attribute of type String. For example:</p> <p> <code>"S": "Hello"</code> </p>', 'StringSetAttributeValue$member' => NULL, ], ], 'StringSetAttributeValue' => [ 'base' => NULL, 'refs' => [ 'AttributeValue$SS' => '<p>An attribute of type String Set. For example:</p> <p> <code>"SS": ["Giraffe", "Hippo" ,"Zebra"]</code> </p>', ], ], 'TableName' => [ 'base' => NULL, 'refs' => [ 'ListStreamsInput$TableName' => '<p>If this parameter is provided, then only the streams associated with this table name are returned.</p>', 'Stream$TableName' => '<p>The DynamoDB table with which the stream is associated.</p>', 'StreamDescription$TableName' => '<p>The DynamoDB table with which the stream is associated.</p>', ], ], 'TrimmedDataAccessException' => [ 'base' => '<p>The operation attempted to read past the oldest stream record in a shard.</p> <p>In DynamoDB Streams, there is a 24 hour limit on data retention. Stream records whose age exceeds this limit are subject to removal (trimming) from the stream. You might receive a TrimmedDataAccessException if:</p> <ul> <li> <p>You request a shard iterator with a sequence number older than the trim point (24 hours).</p> </li> <li> <p>You obtain a shard iterator, but before you use the iterator in a <code>GetRecords</code> request, a stream record in the shard exceeds the 24 hour period and is trimmed. This causes the iterator to access a record that no longer exists.</p> </li> </ul>', 'refs' => [], ], ],];
