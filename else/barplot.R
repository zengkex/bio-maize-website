rm(list=ls())
library(ggplot2)
data1<-data.frame(id="Zm00001eb383460",log2FoldChange=-4.60638171)
data <- read.delim("data.txt", header = FALSE)#server
# data <- read.delim("~/Desktop/data.txt", header=FALSE)#local
names(data)<-c("id","log2FoldChange")
df<-rbind(data,data1)
plot<-ggplot(df,aes(id,log2FoldChange,fill=log2FoldChange>=0))+
  geom_bar(stat = "identity",position="identity")+
  scale_fill_manual(values=c("Black","Grey"))
ggsave(plot,filename = file.path('rplot.pdf'),height = 6,width = 7.5)