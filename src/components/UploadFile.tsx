import React, { useState } from "react";
import { Upload, message } from "antd";
import { UploadProps, UploadFile as AntFile, UploadChangeParam } from "antd/lib/upload/interface";
// import { RcFile } from "antd/lib/upload/interface";

interface props extends UploadProps {
  filelimit: number;
  children: any;
  // Upload: "Manual" | "Auto";
}

UploadFile.defaultProps = {
  filelimit: 0,
  Upload: "Auto",
  headers: {
    authorization: "authorization-text",
  },
  onChange: (info: UploadChangeParam) => {
    if (info.file.status === "done") {
      message.success(`${info.file.name} file uploaded successfully`);
    } else if (info.file.status === "error") {
      message.error(`${info.file.name} file upload failed.`);
    }
  },
};

export default function UploadFile(props: props) {
  const [fileList, setfileList]: [AntFile[], Function] = useState([]);

  // function beforeUpload(file: RcFile) {
  //   if (props.Upload == "Manual") {
  //     setfileList([...fileList, file]);
  //     return true;
  //   } else {
  //     message.info(`${file.name} Uploading.`);
  //     return false;
  //   }
  // }

  // function onRemove(file) {
  //   setfileList(() => {
  //     const index = fileList.indexOf(file);
  //     const newFileList = fileList.slice();
  //     newFileList.splice(index, 1);
  //     return {
  //       fileList: newFileList,
  //     };
  //   });
  // }

  function onChange(info: UploadChangeParam) {
    let fileList = [...info.fileList];
    if (props.filelimit) {
      // 1. Limit the number of uploaded files
      // Only to show two recent uploaded files, and old ones will be replaced by the new
      fileList = fileList.slice(-1 * props.filelimit);
      // 2. Read from response and show file link
      fileList = fileList.map((file) => {
        if (file.response) {
          // Component will show file.url as link
          file.url = file.response.url;
        }
        return file;
      });
      if (info.file.status === "done" && props.filelimit === 1) fileList = [];
    }
    setfileList(fileList);

    if (props.onChange) props.onChange(info);
  }

  return (
    // <Upload {...props} beforeUpload={props.beforeUpload ? props.beforeUpload : beforeUpload} onRemove={props.onRemove ? props.onRemove : onRemove} fileList={fileList} onChange={onChange}>
    <Upload {...props} fileList={fileList} onChange={onChange}>
      {props.children}
    </Upload>
  );
}
