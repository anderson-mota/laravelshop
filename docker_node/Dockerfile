FROM node:8-alpine

WORKDIR /root
COPY . /root

RUN npm install
RUN yarn install

ENTRYPOINT [ "npm", "run", "watch" ]
