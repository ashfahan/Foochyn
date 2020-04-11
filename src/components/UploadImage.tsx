import React, { Component } from "react";
import { Upload, message } from "antd";
import { UploadProps, UploadFile, UploadChangeParam, RcFile } from "antd/lib/upload/interface";

interface props extends UploadProps {
  filelimit: number;
}

interface state {
  fileList: Array<UploadFile>;
}

export default class UploadImage extends Component<props, state> {
  static defaultProps: props = {
    filelimit: 0,
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
    beforeUpload: (file: RcFile, FileList: RcFile[]) => {
      message.info(`${file.name} Uploading.`);
      return true;
    },
  };

  constructor(props: props) {
    super(props);
    this.state = { fileList: [] };
  }

  onChange = (info: UploadChangeParam) => {
    let fileList = [...info.fileList];
    if (this.props.filelimit) {
      // 1. Limit the number of uploaded files
      // Only to show two recent uploaded files, and old ones will be replaced by the new
      fileList = fileList.slice(-1 * this.props.filelimit);
      // 2. Read from response and show file link
      fileList = fileList.map((file) => {
        if (file.response) {
          // Component will show file.url as link
          file.url = file.response.url;
        }
        return file;
      });

      if (info.file.status === "done" && this.props.filelimit === 1) fileList = [];
    }
    this.setState({ fileList });

    if (this.props.onChange) this.props.onChange(info);
  };

  render() {
    return (
      <Upload {...this.props} fileList={this.state.fileList} onChange={this.onChange}>
        {this.props.children}
      </Upload>
    );
  }
}
